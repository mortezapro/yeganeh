<?php

use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\ContactController;
use App\Http\Controllers\Panel\Dashboard\DashboardController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\ScanMessageController;
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

    Route::get('/scan-messages', [ScanMessageController::class,"index"])->name("scanMessages.index");
    Route::get('/scan-messages/{scanMessage:tracking_code}/edit', [ScanMessageController::class,"edit"])->name("scanMessages.edit");
    Route::post('/scan-messages/update/{scanMessage:id}', [ScanMessageController::class,"update"])->name("scanMessages.update");
    Route::get('/scan-messages/{scanMessage:id}/destroy', [ScanMessageController::class,"destroy"])->name("scanMessages.destroy");
    Route::get('/scan-messages/change-status/{scanMessage:id}', [ScanMessageController::class,"changeStatus"])->name("scanMessage.changeStatus");
    Route::post('/scan-messages/set-comment/{scanMessage:id}', [ScanMessageController::class,"setComment"])->name("scanMessage.set-comment");

    Route::get('/contacts', [ContactController::class,"index"])->name("contacts.index");
    Route::get('/contacts/edit/{message:id}', [ContactController::class,"edit"])->name("contacts.edit");
    Route::get('/contacts/{message:id}/destroy', [ContactController::class,"destroy"])->name("contacts.destroy");

});
