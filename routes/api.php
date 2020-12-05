<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnterpriseController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('address', 'AddressController');
Route::put('address', [AddressController::class, 'update']);
Route::delete('address', [AddressController::class, 'destroy']);

Route::resource('contact', 'ContactController');
Route::put('contact', [ContactController::class, 'update']);
Route::delete('contact', [ContactController::class, 'destroy']);

Route::resource('enterprise', 'EnterpriseController');
Route::put('enterprise', [EnterpriseController::class, 'update']);
Route::delete('enterprise', [EnterpriseController::class, 'destroy']);

