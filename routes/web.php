<?php

use Illuminate\Support\Facades\Route;

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
Route::post('convertir', [ConversorController::class, 'convertir'])->name('convertir');
Route::get('/', function () {
    return view('inicio');
});

Route::get('/conversor', function () {
    return view('conversor');
});

Route::view('/conversor', 'conversor');
Route::view('/inicio', 'inicio');
Route::view('/acerca', 'acerca');
Route::view('/singup', 'singup');
