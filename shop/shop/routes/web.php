<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//User
Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/Home',[App\Http\Controllers\HomeController::class,'index']);

////////////Category/////////////
Route::get('/list-of-product/{category_id}',[App\Http\Controllers\CategoryProduct::class,'show_category_home']);


//Admin
Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'show_dashboard']);
Route::get('/all_product',[App\Http\Controllers\AdminController::class,'all_product']);

//////////Category///////////

Route::get('/add-category-product',[App\Http\Controllers\CategoryProduct::class,'add_category_product']);
Route::get('/edit_category_product/{category_product_id}',[App\Http\Controllers\CategoryProduct::class,'edit_category_product']);
Route::get('/delete_category_product/{category_product_id}',[App\Http\Controllers\CategoryProduct::class,'delete_category_product']);
Route::get('/all-category-product',[App\Http\Controllers\CategoryProduct::class,'all_category_product']);

Route::post('/save-category-product',[App\Http\Controllers\CategoryProduct::class,'save_category_product']);
Route::post('/update-category-product/{category_product_id}',[App\Http\Controllers\CategoryProduct::class,'update_category_product']);

////////Product/////////////
Route::get('/add-product',[App\Http\Controllers\ProductController::class,'add_product']);
Route::get('/edit_product/{product_id}',[App\Http\Controllers\ProductController::class,'edit_product']);
Route::get('/delete_product/{product_id}',[App\Http\Controllers\ProductController::class,'delete_product']);
Route::get('/all_product',[App\Http\Controllers\ProductController::class,'all_product']);


Route::post('/save-product',[App\Http\Controllers\ProductController::class,'save_product']);
Route::post('/update-product/{product_id}',[App\Http\Controllers\ProductController::class,'update_product']);

// Route::post('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::delete('remove-from-cart/{id2}', [App\Http\Controllers\ProductController::class, 'removeCart'])->name('remove_from_cart');
Route::get('remove-from-cart/{id2}', [App\Http\Controllers\ProductController::class, 'removeCart'])->name('remove_from_cart');