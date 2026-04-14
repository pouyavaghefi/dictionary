<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $phrases = Phrase::query()
            ->when($search, function ($query, $search) {
                $query->where('original', 'like', "%{$search}%")
                    ->orWhere('replacement', 'like', "%{$search}%")
                    ->orWhere('reason', 'like', "%{$search}%");
            })
            ->orderBy('original')
            ->paginate(20)
            ->withQueryString();

        return view('phrases.index', compact('phrases', 'search'));
    }
}
