<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UserController;

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

//Route::get('/{any}', [ApplicationController::class, 'index'])->where('any', '.*');
Route::get('{any}', function () {
    return view('application');
})->where('any', '.*');

Route::post('formSubmit','PostController@formSubmit');

Route::get('/u',[UserController::class,'showuser']);

Route::get('users', [UserController::class, 'indexes']);
Route::get('list', [UserController::class, 'list']);