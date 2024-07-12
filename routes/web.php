<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\My\UserController;
use App\Http\Controllers\PopularDiscussionController;
use App\Http\Controllers\SaveController;
use App\Models\Answer;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ReplyController;

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
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('auth.password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('auth.password.email');
Route::get('password/reset/form', [ResetPasswordController::class, 'showResetForm'])->name('auth.password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('auth.password.update');

Route::middleware('auth')->group(function () {
    Route::namespace('App\Http\Controllers\My')->group(function () {
        Route::resource('users', UserController::class)->only(['edit', 'update']);
    });

    Route::namespace('App\Http\Controllers')->group(function () {
        Route::resource('discussions', DiscussionController::class)->only(['create','store', 'edit', 'update', 'destroy' ]);
        Route::post('discussions/{discussion}/like', 'LikeController@discussionLike')->name('discussions.like.like');
        Route::post('discussions/{discussion}/unlike', 'LikeController@discussionUnlike')->name('discussions.like.unlike');

        Route::post('discussions/{discussion}/answer', 'AnswerController@store')->name('discussions.answer.store');
       
        // Route untuk menampilkan form reply
        Route::post('/answers/{answer}/reply', [ReplyController::class, 'store'])->name('answers.reply');
        Route::get('replies/{reply}/edit', [ReplyController::class, 'edit'])->name('replies.edit');
        Route::put('replies/{reply}', [ReplyController::class, 'update'])->name('replies.update');

        

        // Route untuk menghapus reply
        Route::delete('/replies/{reply}', [ReplyController::class, 'destroy'])->name('replies.destroy');
        

        Route::resource('answers', AnswerController::class)->only(['edit', 'update', 'destroy']);

        Route::post('answers/{answer}/like', 'LikeController@answerLike')->name('answers.like.like');
        Route::post('answers/{answer}/unlike', 'LikeController@answerUnlike')->name('answers.like.unlike');
        
    });
});


Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('discussions', DiscussionController::class)->only(['index','show']);
    Route::resource('popular-discussions', PopularDiscussionController::class)->only(['index', 'show']);
    Route::get('discussions/categories/{category}', 'CategoryController@show')->name('discussions.categories.show');
});


// LOGIN & SIGNUP ROUTE
Route::namespace('App\Http\Controllers\Auth')->group(function(){
    Route::get('login', 'LoginController@show')->name('auth.login.show');
    Route::post('login', 'LoginController@login')->name('auth.login.login');
    Route::post('logout', 'LoginController@logout')->name('auth.login.logout');
    Route::get('sign-up', 'SignUpController@show')->name('auth.sign-up.show');
    Route::post('sign-up', 'SignUpController@signUp')->name('auth.sign-up.sign-up');
});


Route::namespace('App\Http\Controllers\My')->group(function () {
    Route::resource('users', UserController::class)->only(['show']);
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

Route::get('help', function () {
    return view('pages.others.help');
})->name('others.help');

Route::get('contact', function () {
    return view('pages.others.contact');
})->name('others.contact');



Route::get('/challenge', [ChallengeController::class, 'index'])->name('challenge.index');
Route::get('/challenge/{id}', [ChallengeController::class, 'show'])->name('challenge.show');

Route::get('/book', [BookController::class, 'index'])->name('books.index');
Route::get('/book/{id}', [BookController::class, 'show'])->name('books.show');


Route::get('/podcasts', [PodcastController::class, 'index'])->name('podcasts.index');

Route::middleware('auth')->group(function () {
    Route::post('/follow/{user}', [FollowController::class, 'follow'])->name('follow')->name('user.follow');;
    Route::post('/unfollow/{user}', [FollowController::class, 'unfollow'])->name('unfollow')->name('user.unfollow');
});