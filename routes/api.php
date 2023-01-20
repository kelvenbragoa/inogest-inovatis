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

Route::get('/users',[\App\Http\Controllers\Api\EdcUserApiController::class,'index']);
Route::get('/recover/{phone}/code/{code}',[\App\Http\Controllers\Api\EdcUserApiController::class,'recover']);
Route::get('/reference',[\App\Http\Controllers\Api\EdcUserApiController::class,'getreference']);
Route::post('/createrecord',[\App\Http\Controllers\Api\EdcUserApiController::class,'store']);

Route::get('/recovereds/{phone}/code/{code}',[\App\Http\Controllers\Api\EdsUserApiController::class,'recover']);
Route::get('/referenceeds',[\App\Http\Controllers\Api\EdsUserApiController::class,'getreference']);
Route::post('/createrecordeds',[\App\Http\Controllers\Api\EdsUserApiController::class,'store']);

Route::get('/price/{id}',[\App\Http\Controllers\Api\PriceController::class,'getprice']);

Route::get('/voucher/{code}/{cat}/{start}/{end}',[\App\Http\Controllers\Api\VoucherApiController::class,'voucher']);

Route::get('/vouchereds/{code}/{cat}/{start}/{end}',[\App\Http\Controllers\Api\VoucherApiController::class,'vouchereds']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
