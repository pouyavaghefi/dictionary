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
        // 'word', 'phrase','loanword', 'abbreviation'
        $types = ['word'];
        shuffle($types); // randomize the order

        foreach ($types as $type) {
            switch ($type) {
                case 'word':
                    $item = Word::where('language_id', 1)->inRandomOrder()->first();
                    if ($item)
                        return view('game', [
                            'type' => $type,
                            'question' => $item->word,
                            'answer' => $item->meaning
                        ]);
                    break;

                case 'sentence':
                    $item = Sentence::inRandomOrder()->first();
                    if ($item) return view('game', ['type' => $type, 'question' => $item->sentences]);
                    break;

                case 'turnover':
                    $item = Turnover::inRandomOrder()->first();
                    if ($item) return view('game', ['type' => $type, 'question' => $item->sentences]);
                    break;

                case 'phrase':
                    $item = Phrase::inRandomOrder()->first();
                    if ($item) return view('game', ['type' => $type, 'question' => $item->original, 'answer' => $item->replacement]);
                    break;

                case 'loanword':
                    $item = LoanWord::inRandomOrder()->first();
                    if ($item) return view('game', ['type' => $type, 'question' => $item->word, 'answer' => $item->meaning]);
                    break;

                case 'abbreviation':
                    $item = Abbreviation::inRandomOrder()->first();
                    if ($item) return view('game', ['type' => $type, 'question' => $item->original, 'answer' => $item->replacement]);
                    break;
            }
        }

        return view('game')->with('message', 'No data available to play the game.');
    }

    public function checkGuess(Request $request)
    {
        $correct = $request->input('correct_answer');
        $userGuess = $request->input('user_guess');

        if (strtolower(trim($userGuess)) === strtolower(trim($correct))) {
            return back()->with('success', 'Correct!');
        } else {
            return back()->with('error', 'Incorrect! The correct answer was: ' . $correct);
        }
    }
}
