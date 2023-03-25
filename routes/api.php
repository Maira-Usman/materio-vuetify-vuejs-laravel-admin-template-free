<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CouponController;


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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::middleware('api')->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('pages', PagesController::class);
    Route::apiResource('coupons', CouponController::class);
});
/*
Route::middleware('api')->group(function () {
    Route::apiResource('users', UserController::class);
});
Route::middleware('api')->group(function () {
    Route::apiResource('orders', OrderController::class);
});
Route::middleware('api')->group(function () {
    Route::apiResource('pages', PagesController::class);
});
Route::middleware('api')->group(function () {
    Route::apiResource('coupons', CouponController::class);
});

*/
