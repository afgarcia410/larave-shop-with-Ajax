<?php

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

Auth::routes();
//
Route::get('/',[App\Http\Controllers\ProductController::class,'indexW'])->name('indexW');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::resource('user', App\Http\Controllers\HomeController::class)->except(['create', 'store', 'show']);

//Route::get('product',[App\Http\Controllers\ProductController::class,'index'])->name('index');
//
Route::get('product',[App\Http\Controllers\AjaxController::class,'index'])->name('index');
Route::get('product/fetch_data',[App\Http\Controllers\AjaxController::class,'fetch_data'])->name('fetch_data');
Route::get('product/search',[App\Http\Controllers\AjaxController::class,'showEmployee'])->name('showEmployee');

Route::get('product/search2',[App\Http\Controllers\AjaxController::class,'ajaxPagination'])->name('ajaxPagination');

Route::get('product/{id}',[App\Http\Controllers\ProductController::class,'viewProduct'])->name('viewProduct');








//Implementar en el radioButton
Route::get('/adidas',[App\Http\Controllers\ProductController::class,'orderAdidas'])->name('orderAdidas');
Route::get('/nike',[App\Http\Controllers\ProductController::class,'orderNike'])->name('orderNike');
Route::get('/jordan',[App\Http\Controllers\ProductController::class,'orderJordan'])->name('orderJordan');

Route::get('/prices',[App\Http\Controllers\ProductController::class,'filterDesc'])->name('filterDesc');
Route::get('/price',[App\Http\Controllers\ProductController::class,'filterAsc'])->name('filterAsc');
Route::get('/search',[App\Http\Controllers\ProductController::class,'search'])->name('search');
