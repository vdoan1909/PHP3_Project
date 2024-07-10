<?php

use App\Http\Controllers\PH33201Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix("users")
    ->as("users.")
    ->group(function () {
        Route::get("/", [UserController::class, "index"])->name("index");
        Route::get("/create", [UserController::class, "create"])->name("create");
        Route::post("/store", [UserController::class, "store"])->name("store");
        // Route::get("/{id}", [UserController::class, "show"]);
        Route::get("/edit/{id}", [UserController::class, "edit"])->name("edit");
        Route::put("/update/{id}", [UserController::class, "update"])->name("update");
        Route::get("/destroy/{id}", [UserController::class, "destroy"])->name("destroy");
    });

Route::prefix("products")
    ->as("products.")
    ->group(function () {
        Route::get("/", [ProductController::class, "index"])->name("index");
        Route::get("/create", [ProductController::class, "create"])->name("create");
        Route::post("/store", [ProductController::class, "store"])->name("store");
        Route::get("/edit/{id}", [ProductController::class, "edit"])->name("edit");
        Route::put("/update/{id}", [ProductController::class, "update"])->name("update");
        Route::get("/destroy/{id}", [ProductController::class, "destroy"])->name("destroy");
    });


// Bai 2 phan` 3 lab 1
Route::get("/ct/{id}", [TinController::class, "lay1tin"]);

// Bai 3 lab 1
Route::get("/ph33201", [PH33201Controller::class, "index"]);
