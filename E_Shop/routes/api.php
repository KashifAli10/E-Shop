<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\dummController;

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

Route::get('getdata', [ApiController::class, 'getdata']);
Route::get('getdatafromdb', [ApiController::class, 'dbdata']);
Route::get('dbdatapara/{id?}', [ApiController::class, 'dbdatapara']);
Route::get('dbpara', [ApiController::class, 'dbpara']);
Route::get('db_queries', [ApiController::class, 'db_queries']);

//POST Route
Route::post('store', [ApiController::class, 'storedata']);

Route::post('save', [dummController::class, 'storedata']);
