<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abbreviation;
class AbbreviationController extends Controller
{
    /**
     * Display a listing of abbreviations.
     */
    public function index()
    {
        $abbreviations = Abbreviation::with('language')->get();

        return view('abbreviations.index', compact('abbreviations'));
    }
}
