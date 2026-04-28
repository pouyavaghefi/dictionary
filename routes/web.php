<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbbreviationController;
use App\Http\Controllers\IdiomController;
use App\Http\Controllers\CatchPhraseController;
use App\Http\Controllers\PhraseController;
use App\Http\Controllers\ParaphrazeController;
use App\Http\Controllers\TestController;

Route::get('/',[DashboardController::class,'index'])->name('welcome');
Route::get('/abbreviations', [AbbreviationController::class, 'index'])->name('abbr.index');
Route::get('/paraphrases', [ParaphrazeController::class, 'index'])->name('paraphrases.index');
Route::get('/idioms', [IdiomController::class, 'index'])->name('idioms.index');
Route::get('/catch_phrases', [CatchPhraseController::class, 'index'])->name('catch_phrases.index');
Route::get('/phrases', [PhraseController::class, 'index'])->name('phrases.index');

Route::get('/game', [GameController::class, 'index'])->name('game.index');
Route::get('/game/{language:code}', [GameController::class, 'index'])->name('game.language');
Route::post('/game/guess', [GameController::class, 'checkGuess'])->name('game.check');

Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::get('/words/create', [WordController::class, 'create'])->name('words.create');
Route::post('/words/store', [WordController::class, 'store'])->name('words.store');

Route::get('/synonyms/words/{lang}', [WordController::class, 'thoseWords'])->name('words.specific.lang');
Route::post('/synonyms/words/{word}/synonym', [WordController::class, 'addSynonym'])->name('words.addSynonym');

Route::get('/words/browse/{lang}', [WordController::class, 'browse'])->name('words.browse');

Route::get('/words/show/{word}', [WordController::class, 'show'])->name('words.show');
Route::get('/words/landing/search', [WordController::class, 'search'])->name('words.search');
Route::get('/words/add/{word}/examples', [WordController::class, 'addExample'])->name('words.addExample');
Route::post('/words/add/{word}/examples', [WordController::class, 'addExample']);
Route::post('/words/vote/{word}/upvote', [WordController::class, 'upvote'])->name('words.upvote');
Route::post('/words/vote/{word}/downvote', [WordController::class, 'downvote'])->name('words.downvote');
Route::get('/words/{word}/related/show', [WordController::class, 'relatedWords'])->name('words.related');

Route::get('/words/{lang}', [WordController::class, 'langWords'])->name('words.custom.lang');

Route::get('/tests/start', [TestController::class, 'confirm'])->name('tests.confirm');
Route::post('/tests/start', [TestController::class, 'startTest'])->name('tests.start');
Route::get('/tests/{test}', [TestController::class, 'show'])->name('tests.show');
Route::post('/tests/{test}/answer', [TestController::class, 'submitAnswer'])->name('tests.answer');
