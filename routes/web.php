<?php

use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\PanelAuthenticationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomePageController::class,"index"])->name("home");
Route::get('/home2', [HomePageController::class,"index2"])->name("home2");
Route::get('/about', [HomePageController::class,"about"])->name("about");
Route::get('/contact', [ContactController::class,"index"])->name("contact.index");
Route::post('/contact', [ContactController::class,"store"])->name("contact.store");
Route::get('/faq', [HomePageController::class,"faq"])->name("faq");
Route::get('/blog/{type?}', [PostController::class,"blog"])->name("front.blog.index");
Route::get('/category/{category:slug?}', [PostController::class,"category"])->name("front.category.index");
Route::get('/post/{post:slug?}', [PostController::class,"single"])->name("front.post.single");
Route::get('/service/{service}', [ServiceController::class,"single"])->name("front.service.single");

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::prefix("panel")->middleware('guest')->group(function () {
    Route::get('login', [PanelAuthenticationController::class, 'index'])->name('panel.login.index');
    Route::post('login', [PanelAuthenticationController::class, 'login'])->name("panel.login");
});
//require __DIR__.'/auth.php';
require __DIR__.'/panel.php';
