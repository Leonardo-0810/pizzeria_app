<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\UserController;
use App\Models\User;


use App\Http\Controllers\api\Auth\RegisteredUserController;
use App\Http\Controllers\api\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Api\PizzaSizeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function () {
    return User::all();
});


Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');


Route::apiResource('users', UserController::class);
Route::resource('clients', ClientController::class);
Route::apiResource('pizza-sizes', PizzaSizeController::class);
