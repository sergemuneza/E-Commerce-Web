<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunnyController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showHomePage',[FunnyController::class,'showHomePage'])->name('showHomePage');

Route::get('/showRegisterForm',[FunnyController::class,'showRegisterForm'])->name('showRegisterForm');
Route::post('/userRegisterForm',[FunnyController::class,'userRegisterForm'])->name('userRegisterForm');

Route::get('/showLoginForm',[FunnyController::class,'showLoginForm'])->name('showLoginForm');
Route::post('/userLoginForm',[FunnyController::class,'userLoginForm'])->name('userLoginForm');

Route::get('/showProductForm',[ProductController::class,'showProductForm'])->name('showProductForm');
Route::post('/useProductForm',[ProductController::class,'useProductForm'])->name('useProductForm');

Route::get('/showProductStore',[ProductController::class,'showProductStore'])->name('showProductStore');

Route::get('/deleteproduct/{stock}',[productController::class,'delete'])->name('deletestock');

Route::get('/editProductForm/{stock}', [ProductController::class, 'edit'])->name('editProductForm');
Route::post('/updateProductForm/{stock}', [ProductController::class, 'update'])->name('updateProductForm');
