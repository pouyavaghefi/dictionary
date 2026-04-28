<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class WordController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $words = Word::query()
            ->when($search, function ($query, $search) {
                $query->where('word', 'like', "%{$search}%")
                    ->orWhere('meaning', 'like', "%{$search}%")
                    ->orWhere('meaning_en', 'like', "%{$search}%");
            })
            ->orderBy('word')
            ->paginate(20)
            ->withQueryString();

        return view('words.index', compact('words', 'search'));
    }

    public function langWords($id)
    {
        $words = Word::where('language_id', $id)
            ->orderBy('word')
            ->paginate(20);

        return view('words.index', [
            'words' => $words,
            'search' => null,
        ]);
    }


    public function browse($lang)
    {
        $language = Language::findOrFail($lang);
        $languageName = $language->name;

        $words = Word::where('language_id', $language->id)
            ->orderBy('word')
            ->paginate(20); // <-- use paginate
        // ->withQueryString(); // optional if you have filters

        return view('words.index', compact('words','languageName'));
    }

    public function thoseWords($lang)
    {
        $language = Language::findOrFail($lang);
        $languageName = $language->name;

        $words = Word::where('language_id', $lang)
            ->orderBy('word')
            ->paginate(20); // <-- use paginate

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
        $languages = Language::all();
        return view('words.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'word' => 'required|string|max:255',
            'language_id' => 'required|exists:languages,id',
            'meaning' => 'nullable|string|max:255',
            'meaning_en' => 'nullable|string|max:255',
        ]);

        Word::create([
            'word' => $validated['word'],
            'language_id' => $validated['language_id'],
            'meaning' => $validated['meaning'],
            'meaning_en' => $validated['meaning_en'],
            'creator_type' => Word::CREATOR_USER, // এখানে অটো ১ (User) হিসেবে সেভ হবে।
        ]);

        return redirect()->route('words.index')->with('success', 'নতুন শব্দ সফলভাবে যোগ করা হয়েছে!');
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
