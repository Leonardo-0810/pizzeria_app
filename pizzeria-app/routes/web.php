<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\PizzaingredientController;
use App\Http\Controllers\PizzarawmaterialController;
use App\Http\Controllers\RawmaterialController;
use App\Http\Controllers\ExtraIngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaSizeController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredientController;
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
    Route::resource('pizzas', PizzaController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('purchases', PurchaseController::class);
    Route::resource('ingredients', IngredientController::class);
    Route::resource('rawmaterials', RawmaterialController::class);
    Route::resource('employees', EmployeeController::class);

    Route::resource('pizzaingredients', PizzaingredientController::class);

    Route::resource('pizzarawmaterials', PizzarawmaterialController::class);


    Route::resource('suppliers', SupplierController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('pizza-sizes', PizzaSizeController::class);
    Route::resource('extra-ingredients', ExtraIngredientController::class);
});



require __DIR__ . '/auth.php';
