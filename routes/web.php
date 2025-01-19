<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

Route::get('/', [Controllers\HomepageController::class, 'index'])->name('homepage');


Route::get('/articles', [Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/donate', [Controllers\DonateController::class, 'index'])->name('donate');

Route::resource('profile', Controllers\ProfileController::class)->middleware('auth')->middleware('auth');
Route::get('/editpage', [Controllers\ProfileController::class, 'editpage'])->middleware('auth')->middleware('auth')->name('profile.editpage');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/articles/{id}/postcomment', [ArticleController::class, 'postcomment'])->middleware('auth')->name('articles.postcomment');
Route::post('/articles/{id}/postcomment', [ArticleController::class, 'postcomment'])->middleware('auth')->name('articles.postcomment');

Route::get('/change-language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('change.language');

Auth::routes();

Route::resource('transaksi', Controllers\TransactionController::class)->middleware('auth')->middleware('auth');

Route::post('/articles/{id}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::middleware('auth')->group(function () {
    
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

Route::post('/toggle-comments/{id}', [ArticleController::class, 'toggleComments'])->name('toggle.comments');



// Route::post('/transaksi', [Controllers\TransactionController::class, 'store'])->name('transaksi.store');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
