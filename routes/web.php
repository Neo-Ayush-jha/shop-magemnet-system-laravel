<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\homeController;


// product insert here
Route::get('/product',[productController::class,"index"])->name("home");
Route::get('/product/insert',[productController::class,"create"])->name("create");
Route::post('/product/store',[productController::class,"store"])->name("store");
Route::post('/product/update',[productController::class,"update"])->name("update");
Route::get('/product/edit',[productController::class,"edit"])->name("edit");
Route::get('/product/delete/{id}',[productController::class,"delete"])->name("delete");


// category insert here
Route::get('/category',[CategoryController::class,"index"])->name("category.home");
Route::post('/category',[CategoryController::class,"store"])->name("category.store");
Route::post('/category/update/{id}',[CategoryController::class,"update"])->name("category.update");
Route::get('/category/edit/{id}',[CategoryController::class,"edit"])->name("category.edit");
Route::get('/category/delete/{id}',[CategoryController::class,"delete"])->name("category.delete");


// publick homework page
Route::get("/",[homeController::class,"index"])->name("homepage");
Route::get("/category-filter/{cat_id}",[homeController::class,"categoryFilter"])->name("categoryFilter");
Route::get("/product/{pro_id}",[homeController::class,"singleView"])->name("singleView");