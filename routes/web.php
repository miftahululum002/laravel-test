<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkTransactionController;
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WorkTransactionController::class,'index'])->name('index');
Route::get('/data',[WorkTransactionController::class,'data'])->name('data');
