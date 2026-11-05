<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/car', [CarController::class, 'index'])->name('car');

// Route::get('/category', [CategoryController::class, 'index'])->name('categories');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::delete('/user/delete/{id}', function($id){
//     return "Men web.php icinde  " . $id;
// });


Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);



Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('/category/create', [CategoryController::class, 'store'])->name("category.store");
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');



Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');


