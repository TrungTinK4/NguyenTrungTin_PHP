<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\SigninController;
use App\Http\Controllers\frontend\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);   // Trang Chu
Route::get('Product.html',[ProductController::class,'index']); // san pham all
Route::get('Product-detail/[slug]',[ProductController::class,'product_detail']); // chi tiet
Route::get('Contact.html',[ContactController::class,'index']); // lien he
Route::get('index.html',[HomeController::class,'index']); // index

Route::get('signup.html',[SignupController::class,'signup']); // san pham all
Route::get('signin.html',[SigninController::class,'signin']); // san pham all
