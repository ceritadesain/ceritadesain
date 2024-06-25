<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
use App\Models\Answer;

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


Route::middleware('auth')->group(function () {
    Route::namespace('App\Http\Controllers')->group(function () {
        Route::resource('discussions', DiscussionController::class)->only(['create','store', 'edit', 'update', 'destroy' ]);
        Route::post('discussions/{discussion}/like', 'LikeController@discussionLike')->name('discussions.like.like');
        Route::post('discussions/{discussion}/unlike', 'LikeController@discussionUnlike')->name('discussions.like.unlike');

        Route::post('discussions/{discussion}/answer', 'AnswerController@store')->name('discussions.answer.store');

        Route::resource('answers', AnswerController::class)->only(['edit', 'update', 'destroy']);

        Route::post('answers/{answer}/like', 'LikeController@answerLike')->name('answers.like.like');
        Route::post('answers/{answer}/unlike', 'LikeController@answerUnlike')->name('answers.like.unlike');
    });
});

// DISCUSSION LIST and DETAIL LIST
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



// SHOW PROFILE
Route::get('users/sahaln', function () {
    return view('pages.users.show');
})->name('users.show');

// EDIT PROFILE
Route::get('users/sahaln/edit', function () {
    return view('pages.users.form');
})->name('users.edit');