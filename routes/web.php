<?php

use App\Http\Controllers\TolisController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TolisController::class, 'index'] );
Route::post('/', [TolisController::class, 'store']);
Route::patch('/{toli}', [TolisController::class, 'update'] );
Route::delete('/{toli}',[TolisController::class, 'destroy'] );
