<?php

use App\Models\Product;
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

Route::get('/', function () {return view('welcome');});


Route::get('/product', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'] )->name('products.destroy');
Route::put('/product/edit/{id}', [ProductController::class, 'edit'] )->name('products.edit');
Route::put('/product/update/{id}', [ProductController::class, 'update'] )->name('products.update');
