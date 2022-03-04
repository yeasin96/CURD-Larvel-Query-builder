<?php

use App\Http\Controllers\stdcon;
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

Route::get('/',[stdcon::class,'index'])->name('index');
Route::post('/',[stdcon::class,'create'])->name('create');
Route::get('/edit/{id}',[stdcon::class,'edit'])->name('edit');
Route::put('/edit/{id}',[stdcon::class,'update'])->name('update');
Route::get('/delete/{id}',[stdcon::class,'destroy'])->name('destroy');
