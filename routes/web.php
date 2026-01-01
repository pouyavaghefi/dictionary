<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\DashboardController;

Route::get('/',[DashboardController::class,'index'])->name('welcome');

Route::get('/game', [GameController::class, 'index'])->name('game.index');
Route::post('/game/guess', [GameController::class, 'checkGuess'])->name('game.check');

Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::get('/words/{lang}', [WordController::class, 'thoseWords'])->name('words.specific.lang');
Route::post('/words/{word}/synonyms', [WordController::class, 'addSynonym'])->name('words.addSynonym');

Route::get('/words/show/{word}', [WordController::class, 'show'])->name('words.show');
Route::get('/words/landing/search', [WordController::class, 'search'])->name('words.search');
Route::get('/words/add/{word}/examples', [WordController::class, 'addExample'])->name('words.addExample');
Route::post('/words/add/{word}/examples', [WordController::class, 'addExample'])->name('words.addExample');
Route::post('/words/vote/{word}/upvote', [WordController::class, 'upvote'])->name('words.upvote');
Route::post('/words/vote/{word}/downvote', [WordController::class, 'downvote'])->name('words.downvote');
Route::get('/words/{word}/related/show', [WordController::class, 'relatedWords'])->name('words.related');

Route::get('/words/create', [WordController::class, 'create'])->name('words.create');
Route::post('/words/store', [WordController::class, 'store'])->name('words.store');
