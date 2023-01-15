<?php

use App\Http\Controllers\CompanyController;
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

Route::get('fetchData',  [CompanyController::class, 'index']);
Route::post('storeData',  [CompanyController::class, 'store']);
Route::get('fetchData/{id}',  [CompanyController::class, 'show']);
Route::put('updateData/{id}',  [CompanyController::class, 'update']);
Route::delete('destroyData/{id}',  [CompanyController::class, 'destroy']);

//Route::apiResource('LaravelPractice', CompanyController::class); A sysntax to view all the methods inside a controller
