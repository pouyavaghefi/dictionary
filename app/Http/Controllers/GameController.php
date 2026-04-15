<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    /**
     * Show a random word from the selected language (defaults to Dutch).
     *
     * @param  Language|null  $language  — resolved via route model binding on {language:code}
     */
    public function index(?Language $language = null)
    {
        // Load all languages that actually have at least one word
        $languages = Language::whereHas('words')->get();

        // Default to Dutch (language_id = 4) when no language segment in URL
        if (!$language || !$language->exists) {
            $language = Language::find(4);
        }

        if (!$language) {
            abort(404, 'Default language not found in database.');
        }

        $item = Word::where('language_id', $language->id)
                    ->inRandomOrder()
                    ->first();

        if (!$item) {
            return redirect()
                ->route('game.index')
                ->with('error', " No words found for language: {$language->name}");
        }

        // Persist current word and language in session
        Session::put('word', $item);
        Session::put('game_language_id', $language->id);

        // Decide what the user must answer: prefer English, fall back to Persian
        if (!empty($item->meaning_en)) {
            $answerLang = 'en';
        } elseif (!empty($item->meaning)) {
            $answerLang = 'fa';
        } else {
            $answerLang = 'none';
        }

        return view('game', [
            'type'      => 'word',
            'question'  => $item->word,
            'sentence'  => $answerLang,
            'language'  => $language,
            'languages' => $languages,
        ]);
    }

    /**
     * Check the user's guess against the stored word.
     */
    public function checkGuess(Request $request)
    {
        $word = Session::get('word');

        if (!$word) {
            return redirect()->route('game.index');
        }

        $userGuess = mb_strtolower(trim($request->input('user_guess', '')));

        // Retrieve current stats (consistent nested key: stats.*)
        $correct = Session::get('stats.correct', 0);
        $wrong   = Session::get('stats.wrong', 0);

        // Build list of acceptable correct answers
        $correctAnswers = [];
        if (!empty($word->meaning)) {
            $correctAnswers[] = mb_strtolower(trim($word->meaning));
        }
        if (!empty($word->meaning_en)) {
            $correctAnswers[] = mb_strtolower(trim($word->meaning_en));
        }

        // Determine the route to redirect back to (language-specific or default)
        $languageId  = Session::get('game_language_id', 4);
        $language    = Language::find($languageId);
        $redirectRoute = ($language && $language->code !== null)
            ? route('game.language', ['language' => $language->code])
            : route('game.index');

        if ($userGuess === '' || !in_array($userGuess, $correctAnswers)) {
            Session::put('stats.wrong', $wrong + 1);
            Session::put('stats.total', $correct + $wrong + 1);

            $message = "❌ Wrong!  {$word->word}"
                . " | FA: " . ($word->meaning    ?? '—')
                . " | EN: " . ($word->meaning_en ?? '—');

            return redirect($redirectRoute)->with('error', $message);
        }

        Session::put('stats.correct', $correct + 1);
        Session::put('stats.total', $correct + 1 + $wrong);

        $message = "✅ Correct!  {$word->word}"
            . " | FA: " . ($word->meaning    ?? '—')
            . " | EN: " . ($word->meaning_en ?? '—');

        return redirect($redirectRoute)->with('success', $message);
    }
}
