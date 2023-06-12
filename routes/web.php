<?php


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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/Photos',[MainController::class,'Photos'])->name('Photos');
Route::get('/Contacts',[MainController::class,'Contacts'])->name('Contacts');
Route::get('/search',[MainController::class,'search'])->name('search');
Route::get('/aboutUs',[MainController::class,'aboutUs'])->name('aboutUs');
Route::get('/Treatment',[MainController::class,'Treatment'])->name('Treatment');
Route::get('/admin',[MainController::class,'admin'])->name('admin');

Route::get('/catalog',[CatalogController::class,'catalog'])->name('catalog');

Route::get('/catalog/details/{product_id}', [CatalogController::class, 'details'])->name('details');

Route::post('/send-message', [MailController::class, 'sendEmail'])->name('contact.send');

Route::get('/order/{product_id}', [CatalogController::class, 'order'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');


Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

