<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Word;
class WordController extends Controller
{
    public function index()
    {
        $words = Word::all();

        return view('words.index', compact('words'));
    }
    public function thoseWords($lang)
    {
        $language = Language::whereName($lang)->orWhere('code', $lang)->firstOrFail();
        $languageId = $language->id;
        $languageName = $language->name;
        $words = Word::where('language_id',$languageId)->get();

        return view('words.synonyms', compact('words','languageName'));
    }

    public function addSynonym(Request $request, Word $word)
    {
        $request->validate([
            'synonym' => 'required|string|max:255'
        ]);

        $synonymWord = Word::firstOrCreate([
            'word' => $request->input('synonym'),
            'language_id' => $word->language_id,
        ]);

        if ($word->id !== $synonymWord->id) {
            $word->synonyms()->syncWithoutDetaching($synonymWord->id);
        }

        return redirect()->route('words.index')->with('success', 'Synonym added!');
    }
}
