<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idiom;
class IdiomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $idioms = Idiom::query()
            ->when($search, function ($query, $search) {
                $query->where('idiom', 'like', "%{$search}%")
                    ->orWhere('example', 'like', "%{$search}%")
                    ->orWhere('meaning', 'like', "%{$search}%");
            })
            ->orderBy('idiom')
            ->paginate(20)
            ->withQueryString(); // keep search in links

        return view('idioms.index', compact('idioms', 'search'));
    }
}
