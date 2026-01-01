<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class DashboardController extends Controller
{
    public function index()
    {
        $wordOfTheDay = Word::inRandomOrder()->first();
        $englishCount = Word::where('language_id', 1)->count();
        $germanCount  = Word::where('language_id', 2)->count();
        $totalCount   = Word::count();

        return view('welcome', compact('wordOfTheDay','englishCount','germanCount','totalCount'));
    }
}
