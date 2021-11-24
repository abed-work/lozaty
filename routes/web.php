<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/discover', function () {
    return view('discover');
})->name('discover');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/global-presence', function () {
    return view('global-presence');
})->name('global-presence');


Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
