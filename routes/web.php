<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PesanController;

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

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/', [KamarController::class, 'index'])->name('awal');
Route::get('/kosan', [KamarController::class, 'index_kosan'])->name('kosan');
Route::get('/show/{id}', [KamarController::class, 'show'])->name('show')->middleware('auth');
Route::post('/store/{id}', [KamarController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
