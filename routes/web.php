<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [NewsController::class, 'index'])->name('news');
Route::get('/AddNews', [NewsController::class, 'AddNews'])->name('add.news');
Route::get('/news/show/{id}', [NewsController::class, 'show'])->name('show');
Route::post('/AddNews', [NewsController::class, 'store'])->name('store');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('edit');
Route::post('/news/update/{id}', [NewsController::class, 'update'])->name('update');
Route::delete('/news/delete/{id}', [NewsController::class, 'delete'])->name('delete');
Route::get('/articles/{categoryId}', [CategoryController::class, 'getArticlesByCategory'])->name('articles.category');
