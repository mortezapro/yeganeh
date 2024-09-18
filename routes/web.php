<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home1', [HomePageController::class,"index"])->name("home");
Route::get('/home2', [HomePageController::class,"index2"])->name("home");
Route::get('/about', [HomePageController::class,"about"])->name("home");

