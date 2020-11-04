<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\AddBookControlled;
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