<?php

namespace App\Http\Controllers;

use App\Models\CatchPhrase;
use Illuminate\Http\Request;

class CatchPhraseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $phrases = CatchPhrase::query()
            ->when($search, function ($query, $search) {
                $query->where('phrase', 'like', "%{$search}%")
                    ->orWhere('meaning', 'like', "%{$search}%");
            })
            ->orderBy('phrase')
            ->paginate(20)
            ->withQueryString();

        return view('catch_phrases.index', compact('phrases', 'search'));
    }
}
