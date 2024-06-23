<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;

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

// CREATE DISCUSSION
Route::middleware('auth')->group(function () {
    Route::namespace('App\Http\Controllers')->group(function () {
        Route::resource('discussions', DiscussionController::class)->only(['create','store', 'edit', 'update', 'destroy' ]);
    });
});

// DISCUSSION LIST
Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('discussions', DiscussionController::class)->only(['index','show']);
    Route::get('discussions/categories/{category}', 'CategoryController@show')->name('discussions.categories.show');
});

Route::get('/', function () {
    return view('home');
})->name('home');

// LOGIN & SIGNUP ROUTE
Route::namespace('App\Http\Controllers\Auth')->group(function(){
    Route::get('login', 'LoginController@show')->name('auth.login.show');
    Route::post('login', 'LoginController@login')->name('auth.login.login');
    Route::post('logout', 'LoginController@logout')->name('auth.login.logout');
    Route::get('sign-up', 'SignUpController@show')->name('auth.sign-up.show');
    Route::post('sign-up', 'SignUpController@signUp')->name('auth.sign-up.sign-up');
});




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