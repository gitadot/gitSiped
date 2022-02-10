<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SuratMasukController;
use Faker\Guesser\Name;
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

Route::get('/', function () {
    return view('frontPage');
});
Route::get('/suratMasuk',[SuratMasukController::class,'index'])->name('/suratMasuk');
Route::get('/createSm',[SuratMasukController::class,'create']);
Route::post('/store',[SuratMasukController::class,'store']);
Route::get('/edit/{id}',[SuratMasukController::class,'edit']);
Route::post('/update/{id}',[SuratMasukController::class,'update']);
Route::delete('/delete/{id}',[SuratMasukController::class,'destroy']);
