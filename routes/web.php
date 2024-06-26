<?php

use App\Http\Controllers\PH33201Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// "/" Trang chu
// Route::get("/", [UserController::class, "index"]);

// Trang 
// Route::get("/{id}", [UserController::class, "show"]);

// Route::get("/testUpdate", [UserController::class, "updateTest"]);

Route::get("/ph33201", [PH33201Controller::class, "index"]);