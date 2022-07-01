<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\LikeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('resep',[ResepController::class, 'index']);
Route::get('addresep',[ResepController::class, 'inputpage']);
Route::post('add_resep',[ResepController::class, 'inputdata']);
Route::get('/like/{id}',[ResepController::class, 'suka']);
Route::get('/like_/{id}',[LikeController::class, 'inputlike']);
Route::get('/resep/{id}',[ResepController::class, 'satudata']);

// Route::put('produksi/{id}',[ResepController::class, 'put']);
// Route::delete('produksi/{id}',[ResepController::class, 'delete']);
// Route::get('produksi/{id}',[ResepController::class, 'detail']);
