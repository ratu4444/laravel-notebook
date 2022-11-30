<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/text',[\App\Http\Controllers\textController::class, 'text']);
