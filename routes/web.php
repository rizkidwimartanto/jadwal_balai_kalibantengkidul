<?php

use App\Http\Controllers\BalaiKelurahanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(BalaiKelurahanController::class)->group(function(){
    Route::get('/', 'index')->name('balai-kelurahan.index');
    Route::get('/balai-kelurahan/login', 'login')->name('balai-kelurahan.login');
    Route::get('/balai-kelurahan/register', 'register')->name('balai-kelurahan.register');
    Route::get('/balai-kelurahan/create', 'create')->name('balai-kelurahan.create');
    Route::get('/balai-kelurahan/{id}/edit', 'edit')->name('balai-kelurahan.edit');
    Route::put('/balai-kelurahan/{id}', 'update')->name('balai-kelurahan.update');
    Route::delete('/balai-kelurahan/{id}', 'destroy')->name('balai-kelurahan.destroy');
});
Route::controller(UserController::class)->group(function(){
    Route::post('/balai-kelurahan/store', 'store')->name('balai-kelurahan.store');
});