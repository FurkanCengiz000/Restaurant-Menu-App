<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', Home::class)->name('home');

Route::get('/admin', Admin::class)->name('admin');

Route::get('/admin/add/category', [CategoryController::class, 'create'])->name('admin.addCategory');

Route::get('/admin/add/food', [FoodController::class, 'create'])->name('admin.addFood');

Auth::routes(['register' => false, 'reset' => false]);