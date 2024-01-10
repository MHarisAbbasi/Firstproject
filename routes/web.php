<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestuController;

Route::group(['middlware'=>"web"],function(){
 Route::get('/', [RestuController::class,'index']);
Route::get('/list', [RestuController::class,'listData']);
Route::post('/add', [RestuController::class,'addData']);
Route::view('add','add');
Route::get('/delete/{id}', [RestuController::class,'delete']);

Route::get('/edit/{id}', [RestuController::class,'edit']);
Route::post('edit', [RestuController::class,'update']);
Route::view('register','register');
Route::post('register', [RestuController::class,'register']);

Route::view('login','login');
Route::post('login', [RestuController::class,'login']);
});