<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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
Route::get('/login', [AuthController::class, "login_get"])->name("login");
Route::post('/login', [AuthController::class, "login_post"]);

Route::get('/register', [AuthController::class, "register_get"])->name("register");
Route::post('/register', [AuthController::class, "register_post"]);

Route::get('/admin', [AdminController::class, "admin"])->name("admin");
Route::get('/admin/blog', [AdminController::class, "blog"])->name("admin-blog");

Route::get('/admin/addblog', [AdminController::class, "addblog"])->name("add-blog");
Route::post('/admin/addblog', [AdminController::class, "addblog_save"]);

Route::get("/blogs/{blog}", [BlogController::class, "index"])->name("blog");

Route::get('/', [HomeController::class, "index"])->name("home");
