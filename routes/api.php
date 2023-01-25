<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/Huska/people',\App\Http\Controllers\PeopleController::class);
Route::get('/Huska/people/(people)',[\App\Http\Controllers\PeopleController::class,'show']);
Route::post('/Huska/people',[\App\Http\Controllers\PeopleController::class,'create']);
Route::delete('/Huska/people/(people)',[\App\Http\Controllers\PeopleController::class,'delete']);
Route::put('/Huska/people/(people)',[\App\Http\Controllers\PeopleController::class,'update']);