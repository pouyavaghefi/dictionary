<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class DashboardController extends Controller
{
    public function index()
    {
        $wordOfTheDay = Word::inRandomOrder()->first();

        return view('welcome', compact('wordOfTheDay'));
    }
}
