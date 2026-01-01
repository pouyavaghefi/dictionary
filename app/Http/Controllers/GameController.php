<?php

namespace App\Http\Controllers;

use App\Models\Abbreviation;
use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Sentence;
use App\Models\Turnover;
use App\Models\Phrase;
use App\Models\LoanWord;

class GameController extends Controller
{
    public function index()
    {
        $types = ['word'];
        shuffle($types);

        foreach ($types as $type) {
            if ($type === 'word') {
                $item = Word::where('language_id', 1)->inRandomOrder()->first();
                if ($item) {
                    return view('game', [
                        'type' => 'word',
                        'question' => $item->word,
                        'answer' => $item->meaning,
                    ]);
                }
            }
        }

        abort(404);
    }

    public function checkGuess(Request $request)
    {
        $correct = trim(strtolower($request->input('correct_answer')));
        $userGuess = trim(strtolower($request->input('user_guess')));

        // init stats if not exists
        $stats = session()->get('stats', [
            'correct' => 0,
            'wrong' => 0,
            'total' => 0,
        ]);

        $stats['total']++;

        if ($userGuess === $correct) {
            $stats['correct']++;

            session()->put('stats', $stats);

            return back()->with('success', 'Correct!');
        }

        // wrong answer
        $stats['wrong']++;

        session()->put('stats', $stats);

        return back()->with([
            'error' => 'Incorrect! The correct answer was: ' . $request->input('correct_answer'),

        ]);
    }
}
