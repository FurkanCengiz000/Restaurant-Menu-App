<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin');

Route::get('/admin/category/add', [CategoryController::class, 'create'])->name('admin.addCategory');
Route::get('/admin/food/add', [FoodController::class, 'create'])->name('admin.addFood');

