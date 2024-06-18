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
    return view('home');
})->name('home');

// LOGIN ROUTE
Route::get('login', function () {
    return view('pages.auth.login');
});


// SIGNUP
Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
});


// DISCUSSION
Route::get('discussions', function () {
    return view('pages.discussions.index');
});	

// DETAIL DISCUSSION
Route::get('discussions/lorem', function () {
    return view('pages.discussions.show');
});