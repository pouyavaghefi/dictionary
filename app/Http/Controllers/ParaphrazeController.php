<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paraphraze;

class ParaphrazeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $paraphrases = Paraphraze::query()
            ->when($search, function ($query, $search) {
                $query->where('original', 'like', "%{$search}%")
                    ->orWhere('revised', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(20)
            ->withQueryString();

        return view('paraphrazes.index', compact('paraphrases', 'search'));
    }
}
