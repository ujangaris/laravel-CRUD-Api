<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class,'index']);
Route::get('/products/create', [ProductController::class,'create']);
Route::post('/products/create', [ProductController::class,'store']);
