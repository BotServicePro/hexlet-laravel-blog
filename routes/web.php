<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleRatingController;
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

//Route::get('/', [PageController::class, 'main'])->name('page.index');
//
//Route::get('about', [PageController::class, 'about'])->name('page.about');
//
//Route::get('articles', [ArticleController::class, 'index'])->name('article.index');
//
//Route::get('rating', [RatingController::class, 'rating'])->name('rating.index');
//
//Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create');
//
//Route::post('articles', [ArticleController::class, 'store'])->name('article.store');
//
//Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
//
//Route::patch('articles/{id}', [ArticleController::class, 'update'])->name('article.update');
//
//Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');
//
//Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::resource('articles', ArticleController::class);

Route::get('rating', [ArticleRatingController::class, 'rating'])->name('rating.index');
