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

//Per la rotta / carica il file "welcome"
Route::get('/', function () {
    return view('home');
});

//Per la rotta /credits carica il file "about"
Route::get('/credits', function () {
    return view('about');
});

//Per la rotta /test carica sempre il file "about"
Route::get('/test', function () {
    return view('about');
});
