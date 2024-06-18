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
})->name('auth.login.show');


// SIGNUP
Route::get('sign-up', function () {
    return view('pages.auth.sign-up');
})->name('auth.sign-up.show');


// DISCUSSION
Route::get('discussions', function () {
    return view('pages.discussions.index');
})->name('discussions.index');	


// DETAIL DISCUSSION
Route::get('discussions/lorem', function () {
    return view('pages.discussions.show');
})->name('discussions.show');

// OTHERS
Route::get('about-us', function () {
    return view('pages.others.about_us');
})->name('others.about_us');	

Route::get('code-of-conduct', function () {
    return view('pages.others.code_of_conduct');
})->name('others.code_of_coduct');	

Route::get('privacy-policy', function () {
    return view('pages.others.privacy_policy');
})->name('others.privacy_policy');

Route::get('term-of-use', function () {
    return view('pages.others.term_of_use');
})->name('others.term_of_use');


// CREATE/EDIT DISCUSSION
Route::get('discussions/create', function () {
    return view('pages.discussions.form');
})->name('discussions.create');

// CREATE/EDIT ANSWER
Route::get('answers/1', function () {
    return view('pages.answers.form');
})->name('answers.edit');


// SHOW PROFILE
Route::get('users/sahaln', function () {
    return view('pages.users.show');
})->name('users.show');

// EDIT PROFILE
Route::get('users/sahaln/edit', function () {
    return view('pages.users.form');
})->name('users.edit');