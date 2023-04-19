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
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('admin/categories/show', [CategoryController::class, 'index'])->name('categories.show');

Route::get('admin/category/edit/{category:id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('admin/category/edit/{category:id}', [CategoryController::class, 'update'])->name('categories.update');

Route::delete('admin/category/delete/{category:id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('admin/category/show/details/{category:id}', [CategoryController::class, 'show'])->name('category.showDetails');

Route::get('admin/categories/foods/show/{category:id}', [CategoryController::class, 'showFood'])->name('categories.showFood');
Route::get('admin/categories/food/add/{category:id}', [CategoryController::class, 'createFood'])->name('categories.createFood');

Route::get('admin/food/add', [FoodController::class, 'create'])->name('food.add');
Route::post('admin/food/store', [FoodController::class, 'store'])->name('food.store');

Route::get('admin/foods/show', [FoodController::class, 'show'])->name('food.show');

Route::get('admin/food/edit/{food:id}', [FoodController::class, 'edit'])->name('food.edit');
Route::put('admin/food/edit/{food:id}', [FoodController::class, 'update'])->name('food.update');

Route::get('admin/food/details/{food:id}', [FoodController::class, 'showDetails'])->name('food.showDetails');

Route::delete('admin/food/delete/{food:id}', [FoodController::class, 'destroy'])->name('food.destroy');

Auth::routes(['register' => false, 'reset' => false]);
