<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PismoController;
use App\Http\Controllers\PovezController;

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
    return view('dashboard');
})->name('dashboard');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/pismo',[PismoController::class,'index'])->name('pismo.index');
Route::get('/pismo-add',[PismoController::class,'create'])->name('pismo.create');
Route::post('/pismo-save',[PismoController::class,'save'])->name('pismo.save');
Route::get('/pismo/{id}',[PismoController::class,'delete'])->name('pismo.delete');
Route::get('/pismo-edit/{id}',[PismoController::class,'edit'])->name('pismo.edit');
Route::post('/pismo-update',[PismoController::class,'update'])->name('pismo.update');
Route::resource('povez', PovezController::class);

