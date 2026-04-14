<?php

namespace App\Http\Controllers;

use App\Models\Abbreviation;
use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Sentence;
use App\Models\Turnover;
use App\Models\Phrase;
use App\Models\LoanWord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function index()
    {
        $item = Word::where('language_id', 4)->inRandomOrder()->first();

        if (!$item) {
            abort(404);
        }

        // Store word in session (NOT flash)
        Session::put('word', $item);

        $faExists = !empty($item->meaning);
        $enExists = !empty($item->meaning_en);

        // Decide what user must answer
        if ($enExists) {
            $sentence = 'en';
        } elseif ($faExists) {
            $sentence = 'fa';
        } else {
            $sentence = 'none';
        }

        return view('game', [
            'type' => 'word',
            'question' => $item->word,
            'sentence' => $sentence,
        ]);
    }

    public function checkGuess(Request $request)
    {
        $word = Session::get('word');

        if (!$word) {
            return redirect()->route('game.index');
        }

        $userGuess = strtolower(trim($request->input('user_guess', '')));

        $correctCount = Session::get('correct_count', 0);
        $wrongCount   = Session::get('wrong_count', 0);

        $correctAnswers = [];

        if (!empty($word->meaning)) {
            $correctAnswers[] = strtolower(trim($word->meaning));
        }

        if (!empty($word->meaning_en)) {
            $correctAnswers[] = strtolower(trim($word->meaning_en));
        }

        if ($userGuess === '' || !in_array($userGuess, $correctAnswers)) {

            $wrongCount++;
            Session::put('wrong_count', $wrongCount);

            return redirect()->route('game.index')->with([
                'error' => "❌ Wrong! Word: {$word->word} | FA: " .
                    ($word->meaning ?? '-') .
                    " | EN: " . ($word->meaning_en ?? '-'),
            ]);
        }

        $correctCount++;
        Session::put('correct_count', $correctCount);

        return redirect()->route('game.index')->with([
            'success' => "✅ Correct! Word: {$word->word} | FA: " .
                ($word->meaning ?? '-') .
                " | EN: " . ($word->meaning_en ?? '-'),
        ]);
    }


}
