<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/photos',[MainController::class,'Photos'])->name('Photos');
Route::get('/contacts',[MainController::class,'Contacts'])->name('Contacts');
Route::get('/search',[MainController::class,'search'])->name('search');
Route::get('/aboutUs',[MainController::class,'aboutUs'])->name('aboutUs');
Route::get('/treatment',[MainController::class,'Treatment'])->name('Treatment');
Route::get('/admin',[MainController::class,'admin'])->name('admin');

Route::get('/catalog',[CatalogController::class,'catalog'])->name('catalog');

Route::get('/catalog/details/{product_id}', [CatalogController::class, 'details'])->name('details');

Route::post('/send-message', [MailController::class, 'sendEmail'])->name('contact.send');

Route::get('/order/{product_id}', [CatalogController::class, 'order'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');



Route::middleware('auth')->group(function(){
    Route::prefix('categories')->group(function(){
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    });
    Route::prefix('products')->group(function(){
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    });
    Route::prefix('news')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
    });
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/auth', [AdminController::class, 'authForm'])->name('authForm');
Route::post('/auth', [AdminController::class, 'auth'])->name('auth');
