<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('middle');
});

Route::get('/low', function () {
    return view('low');
});

Route::get('/pro', function () {
    return view('pro');
});

Route::get('/pro-wed', function () {
    return view('proWedding');
});


