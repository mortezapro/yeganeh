<?php

use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\Dashboard\DashboardController;
use App\Http\Controllers\Panel\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix("panel")->as("panel.")->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,"index"])->name("dashboard");

    Route::post('/ckeditor/upload', [CkeditorController::class,"upload"])->name("ckeditor.upload");

    Route::get('/posts', [PostController::class,"index"])->name("posts.index");
    Route::get('/posts/create', [PostController::class,"create"])->name("posts.create");
    Route::post('/posts/create}', [PostController::class,"store"])->name("posts.store");
    Route::post('/posts/update/{post:slug}', [PostController::class,"update"])->name("posts.update");
    Route::get('/posts/{post:slug}/edit', [PostController::class,"edit"])->name("posts.edit");
    Route::get('/posts/{post:slug}/destroy', [PostController::class,"destroy"])->name("posts.destroy");

    Route::get('/categories', [CategoryController::class,"index"])->name("categories.index");
    Route::get('/categories/create', [CategoryController::class,"create"])->name("categories.create");
    Route::post('/categories/create}', [CategoryController::class,"store"])->name("categories.store");
    Route::post('/categories/update/{category:slug}', [CategoryController::class,"update"])->name("categories.update");
    Route::get('/categories/{category:slug}/edit', [CategoryController::class,"edit"])->name("categories.edit");
    Route::get('/categories/{category:slug}/destroy', [CategoryController::class,"destroy"])->name("categories.destroy");
    
});
