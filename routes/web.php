<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/test", [TestController::class, "index"]);
Route::get("/calculate", [TestController::class, "calculate"]);

Route::get("/", [PostController::class, "posts"])->name('posts');
Route::get("/post/{id}", [PostController::class, "post"])->name('post');
Route::get("/create", [PostController::class, "create"])->name('create');
Route::post("/create_save", [PostController::class, "create_save"])->name('create_save');
Route::get("/update/{id}", [PostController::class, "update"])->name('update');
Route::put("/update_save/{id}", [PostController::class, "update_save"])->name('update_save');
Route::delete("/destroy/{id}", [PostController::class, "destroy"])->name('destroy');



