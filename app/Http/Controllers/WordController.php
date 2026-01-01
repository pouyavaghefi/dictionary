<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Support\Facades\Http;
class WordController extends Controller
{
    public function index()
    {
        $words = Word::all();

        return view('words.index', compact('words'));
    }
    public function thoseWords($lang)
    {
        $language = Language::where('id',$lang)->firstOrFail();
        $languageName = $language->name;
        $words = Word::where('language_id',$lang)->get();

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

    public function create()
    {
        dd(1);
    }

    public function store(Request $request)
    {
        dd(3);
    }

    public function search(Request $request)
    {
        $q = trim($request->query('q'));

        if (!$q) {
            return redirect()->back()->with('error', 'Please enter a word to search.');
        }

        // Fetch word from local database
        $word = Word::where('word', 'LIKE', "%{$q}%")->first();

        if (!$word) {
            return view('search_results', [
                'query' => $q,
                'word' => null,
                'externalData' => null,
                'englishEquivalent' => null
            ]);
        }

        $externalData = null;
        $englishEquivalent = null;

        if ($word->language_id == 1) {
            // English word: fetch additional info from dictionary API
            try {
                $response = Http::get("https://api.dictionaryapi.dev/api/v2/entries/en/{$word->word}");
                if ($response->ok()) {
                    $externalData = $response->json();
                }
            } catch (\Exception $e) {
                $externalData = null;
            }
        } else {
            // German word: find English equivalent in database
            $englishEquivalent = Word::where('meaning_en', $word->word)
                ->where('language_id', 1)
                ->first();

            // If not found, try to fetch English translation via API
            // Example using LibreTranslate free API
            try {
                $translateResponse = Http::post('https://libretranslate.com/translate', [
                    'q' => $word->word,
                    'source' => 'de',
                    'target' => 'en',
                    'format' => 'text'
                ]);

                if ($translateResponse->ok()) {
                    $translated = $translateResponse->json();
                    if (isset($translated['translatedText'])) {
                        $englishEquivalent = [
                            'word' => $translated['translatedText'],
                            'meaning' => $translated['translatedText'],
                            'language_id' => 1
                        ];
                    }
                }
            } catch (\Exception $e) {
                // Ignore translation API errors silently
            }
        }

        return view('search_results', [
            'query' => $q,
            'word' => $word,
            'externalData' => $externalData,
            'englishEquivalent' => $englishEquivalent
        ]);
    }

}
