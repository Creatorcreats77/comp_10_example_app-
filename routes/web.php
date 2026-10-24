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

Route::delete('/user/delete/{id}', function($id){
    dum
    return $id;
});


Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);

