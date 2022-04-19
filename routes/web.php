<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LogoutController;
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

Route::get('/admin', [AdminController::class, "blog"])->name("admin");
Route::get('/admin/blog', [AdminController::class, "blog"])->name("admin-blog");

Route::get('/admin/addblog/', [AdminController::class, "addblog"])->name("add-blog");
Route::post('/admin/addblog', [AdminController::class, "addblog_save"]);

Route::delete('/admin/blog/{blog}', [AdminController::class, "blog_delete"])->name("blog-delete");

Route::get('/admin/editblog/{blog}', [AdminController::class, "editblog"])->name("edit-blog");

Route::get("/blogs/{blog}", [BlogController::class, "index"])->name("blog");

Route::get("/logout", [LogoutController::class, "index"])->name("logout");


Route::get("/about", function(){
    return view("about");
})->name("about");
Route::get("/blogs", [BlogsController::class, "index"])->name("blogs");


Route::get('/', [HomeController::class, "index"])->name("home");
