<?php

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

Route::get('/admin/addCategory', function () {
    return view('admin.addCategory');
})->middleware(['auth'])->name('admin.addCategory');

Route::get('/admin/addFood', function () {
    return view('admin.addFood');
})->middleware(['auth'])->name('admin.addFood');
