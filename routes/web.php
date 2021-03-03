<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\formucontroller;
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

Route::get('/',homecontroller::class)->name('formulario.create');
Route::post('formulario', [formucontroller::class,'send'] )->name('formulario.send');
Route::get('formulario/create',[formucontroller::class,'create'] )->name('formulario.crea');
Route::post('formulario/formula', [formucontroller::class,'formula'])->name('formulario.reee');