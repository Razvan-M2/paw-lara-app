<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\AddBookControlled;
use App\Http\Controllers\EditBookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EntriesController::class,'show'])->name('main.show');

Route::get('/addBook', [AddBookControlled::class, 'show'])->name('addBook.show');

Route::post('/addBook', [AddBookControlled::class,'addBookSubmit'])->name('book.submit');

Route::post('/', [EntriesController::class,'deleteOrEdit'])->name('book.delete');

Route::get('/editBook', [EditBookController::class,'editBookView'])->name('book.edit');

Route::post('/editBook', [EditBookController::class,'editBook'])->name('book.edit.save');