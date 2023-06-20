<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Http\Request;

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

Route::get('/', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create'])->middleware('auth');
Route::post('/book',[BookController::class, 'store'])->middleware('auth');
Route::get('/book/{id}',[BookController::class, 'show']);
Route::put('/book/{$book}/edit',[BookController::class, 'edit'])->middleware('auth');
Route::delete('/book/delete',[BookController::class, 'delete'])->middleware('auth');
Route::get('/book',[UserController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
