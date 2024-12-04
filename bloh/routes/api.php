<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware(\App\Http\Middleware\CorsMiddleware::class)->group(function () {
    Route::get("/", [PostController::class, "index"]);
    Route::post("/save", [PostController::class, "store"]);

});
