<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Root route
Route::get('/', function () {
    return 'Welcome to Laravel CodeSpace, ARABELLA';
});

// 1route
Route::get('/hello', function () {
    return 'Hello Laravel! How are you?';
});

//2route greet
Route::get('/greet', [GreetController::class, 'showGreeting']);
