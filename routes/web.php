<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin','as' => 'admin.',],function(){
    Route::get("/home",[DashboardController::class,"home"])->name("home");
    Route::get("/products",[ProductController::class,"index"])->name("products");
    Route::get("/products/create",[ProductController::class,"create"])->name("products.create");
    Route::post("/products",[ProductController::class,"store"])->name("products.store");
    Route::get("/products/edit/{id}",[ProductController::class,"edit"])->name("products.edit");
    Route::get("/products/sell/{id}",[ProductController::class,"sell"])->name("products.sell");
    Route::post("/products/sold/{id}",[ProductController::class,"sold"])->name("products.sold");
    Route::post("/products/update/{id}",[ProductController::class,"update"])->name("products.update");
    Route::get("/orders",[OrderController::class,"index"])->name("orders");
});
