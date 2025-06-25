<?php

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

Route::get('/', function () {
    return view('home');
});
Route::controller('BalaiKelurahanController')->group(function(){
    Route::get('/balai-kelurahan', 'login')->name('balai-kelurahan.login');
    Route::get('/balai-kelurahan/create', 'create')->name('balai-kelurahan.create');
    Route::post('/balai-kelurahan/store', 'store')->name('balai-kelurahan.store');
    Route::get('/balai-kelurahan/{id}/edit', 'edit')->name('balai-kelurahan.edit');
    Route::put('/balai-kelurahan/{id}', 'update')->name('balai-kelurahan.update');
    Route::delete('/balai-kelurahan/{id}', 'destroy')->name('balai-kelurahan.destroy');
});
