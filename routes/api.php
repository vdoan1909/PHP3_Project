<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("products", [ProductController::class, "index"]);
Route::get("product/{product_id}", [ProductController::class, "show"]);
Route::post("product", [ProductController::class, "store"]);
Route::patch("product", [ProductController::class, "update"]);
Route::delete("product", [ProductController::class, "destroy"]);