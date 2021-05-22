<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
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

Route::get('/', [PageController::class, 'main'] )->name('page.index');

Route::get('about',  [PageController::class, 'about'])->name('page.about');

Route::get('articles', [PageController::class, 'articles'])->name('page.articles');

Route::get('rating', [RatingController::class, 'rating'])->name('page.rating');

