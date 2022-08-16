<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Board;
use App\Http\Controllers\BoardController;

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
Route::get('/', [BoardController::class, 'index']);
Route::get('/board/create', [BoardController::class, 'create']);
Route::get('/board/{id}', [BoardController::class, 'show']);
Route::post('/board/create', [BoardController::class, 'store']);
Route::delete('/board/delete/{board}', [BoardController::class, 'delete']);
Route::get('/board/edit/{id}', [BoardController::class, 'edit']);
Route::post('/board/editProcess/{id}', [BoardController::class, 'editProcess']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
