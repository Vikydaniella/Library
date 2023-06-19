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

Route::get('/', function () {
    return view('library', ['books' => Book::all()]);
});

Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book',[BookController::class, 'store']);
Route::get('/book/{id}',[BookController::class, 'show'])->middleware('auth');
Route::patch('/book/edit',[BookController::class, 'edit'])->middleware('auth');
Route::delete('/book/delete',[BookController::class, 'delete'])->middleware('auth');
Route::get('/book',[UserController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
