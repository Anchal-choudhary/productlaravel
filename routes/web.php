<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::get("/",[ProductController::class,"index"]);
Route::post("/insert",[ProductController::class,"store"]);
Route::get("/delete/{id}",[ProductController::class,"delete"]);







    

