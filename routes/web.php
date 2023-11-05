<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ShoppingCartController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog-detail/{id}', [BlogDetailController::class, 'show'])->name('blog-detail');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product-detail/{id}', [ProductDetailController::class, 'show'])->name('product-detail');

Route::get('/shoping-cart', [ShoppingCartController::class, 'index'])->name('shoping-cart');


