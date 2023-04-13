<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/admin', AdminController::class)->name('admin');

Route::get('admin/category/add', [CategoryController::class, 'create'])->name('category.add');
Route::get('admin/categories/show', [CategoryController::class, 'show'])->name('categories.show');
Route::get('admin/category/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('admin/categories/foods/show', [CategoryController::class, 'showFood'])->name('categories.showFood');
Route::get('admin/categories/food/add', [CategoryController::class, 'createFood'])->name('categories.createFood');
Route::get('/category/details', [CategoryController::class, 'showDetails'])->name('category.showDetails');

Route::get('/food/add', [FoodController::class, 'create'])->name('food.add');
Route::get('/foods/show', [FoodController::class, 'show'])->name('food.show');
Route::get('/food/edit', [FoodController::class, 'edit'])->name('food.edit');
Route::get('/food/details', [FoodController::class, 'showDetails'])->name('food.showDetails');

Auth::routes(['register' => false, 'reset' => false]);
