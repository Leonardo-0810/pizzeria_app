<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExtraIngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaSizeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('clients', ClientController::class);

    Route::resource('employees', EmployeeController::class);

    Route::resource('orders', OrderController::class);
    Route::resource('pizza-sizes', PizzaSizeController::class);
    Route::resource('extra-ingredients', ExtraIngredientController::class);
});



require __DIR__ . '/auth.php';
