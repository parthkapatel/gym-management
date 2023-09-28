<?php

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

Route::get('/', [\App\Http\Controllers\UsersController::class,"index"])->name("login");
Route::get('/main', [\App\Http\Controllers\Controller::class,"main"])->name("main");
Route::post("/logout,",[\App\Http\Controllers\UsersController::class,'logout'])->name("logout");

Route::resource('users',\App\Http\Controllers\UsersController::class);
Route::resource('members',\App\Http\Controllers\MemberController::class);
Route::resource('trainers',\App\Http\Controllers\TrainerController::class);
