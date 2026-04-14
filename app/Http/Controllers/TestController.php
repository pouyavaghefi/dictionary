<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Word;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function confirm()
    {
        return view('tests.confirm');
    }

    public function startTest()
    {
        $words = Word::where('language_id', 4)->pluck('id');

        $test = Test::create([
            'user_id' => 1,
            'language_id' => 4,
            'total_words' => $words->count(),
        ]);

        return redirect()->route('tests.show', $test->id);
    }

    public function show(Test $test)
    {
        if ($test->is_completed) {
            return view('tests.finished', compact('test'));
        }

        $answeredIds = $test->words()->pluck('word_id');

        $word = Word::where('language_id', $test->language_id)
            ->whereNotIn('id', $answeredIds)
            ->inRandomOrder()
            ->first();

        if (!$word) {
            $test->update(['is_completed' => true]);
            return redirect()->route('tests.show', $test->id);
        }

        return view('tests.question', compact('test', 'word'));
    }

    public function submitAnswer(Request $request, Test $test)
    {
        $word = Word::findOrFail($request->word_id);

        $userMeaning = trim($request->meaning ?? '');

        $isCorrect = $userMeaning !== '' &&
            mb_strtolower($userMeaning) === mb_strtolower(trim($word->meaning));

        $test->words()->attach($word->id, [
            'is_correct' => $isCorrect,
            'user_sentence' => $isCorrect ? $request->sentence : null
        ]);

        if ($isCorrect) {
            $test->increment('correct_answers');
        }

        return view('tests.result', [
            'test' => $test,
            'word' => $word,
            'isCorrect' => $isCorrect,
            'correctMeaning' => $word->meaning
        ]);
    }
}
