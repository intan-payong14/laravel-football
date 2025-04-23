<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootballController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/live-matches', [FootballController::class, 'liveMatches']);
