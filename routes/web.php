<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;

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

Route::post('/cart/{id}',[CartController::class,'addToCart'])->name('addToCart');
Route::get('/cart',[CartController::class,'index'])->name('cartPage');
Route::post('/cart/{id}/delete',[CartController::class,'deleteFromCart'])->name('deleteFromCart');

Route::get('/catalog',[CatalogController::class,'catalog'])->name('catalog');

Route::get('/catalog/details/{product_id}', [CatalogController::class, 'details'])->name('details');

Route::post('/send-message', [MailController::class, 'sendEmail'])->name('contact.send');

Route::get('/news', [NewsController::class,'news'])->name('news');

Route::get('/order/{product_id}', [CatalogController::class, 'order'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
