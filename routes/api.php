<?php

use App\Http\Controllers\Api\CatController;
use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\WorkerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['namespace'=>'App\Http\Controllers\Api'], function(){
    Route::apiResource('shelters', ShelterController::class);
    Route::apiResource('cats', CatController::class);
    Route::apiResource('workers', WorkerController::class);
});
