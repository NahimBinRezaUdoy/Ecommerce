<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
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


Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/product/{product}', [ProductController::class, 'showDetails'])->name('showDetails');
});

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//admin Product
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('admin/product/edit/{product}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::put('admin/product/update/{product}', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('admin/product/delete/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');

Route::get('admin/product/status/{status}/{product}', [ProductController::class, 'status']);

//admin Category
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/edit]', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('admin/category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('admin/category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

Route::get('admin/category/status/{status}/{category}', [CategoryController::class, 'status']);
