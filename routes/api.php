<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\EnterpriseGroupController;
use App\Http\Controllers\CashierController;


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

Route::resource('enterprisegroup', 'EnterpriseGroupController');
Route::put('enterprisegroup', [EnterpriseGroupController::class, 'update']);
Route::delete('enterprisegroup', [EnterpriseGroupController::class, 'destroy']);

Route::resource('cashier', 'CashierController');
Route::put('cashier', [CashierController::class, 'update']);
Route::delete('cashier', [CashierController::class, 'destroy']);
