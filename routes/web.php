<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartFuntionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\TreatementsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/redirect',[homecontroller::class,"index"]);

   

      

Route::get('adminfunction',[homecontroller::class,"Adduser"]);

Route::post('save-user',[homecontroller::class,"saveuser"]);

Route::post('finishEdit-user',[homecontroller::class,"finishEdituser"]);

Route::get('edit-user/{id}',[homecontroller::class,"edituser"]);

Route::get('delete-user/{id}',[homecontroller::class,"deleteuser"]);

Route::get('addservice',[homecontroller::class,"Addservice"]);

Route::post('service-add',[homecontroller::class,"saveservice"]);

Route::post('servicefin',[homecontroller::class,"servicefin"]);

Route::get('delete-ser/{id}',[homecontroller::class,"deleteser"]);

Route::get('edit-ser/{id}',[homecontroller::class,"editser"]);

      


Route::get('/', function () {
    return view('welcome');
});
Route::get('/redirect',[homecontroller::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [homecontroller::class,"index"]
    )->name('dashboard');
});

     

Route::resource('/contact', ContactController::class);
Route::resource('/item', ItemController::class);

Route::get('/Sub', [NewsletterController::class, 'index'])->name('subscribe');
Route::post('/subcribe', [NewsletterController::class, 'subscribe']);
Route::resource('review', ReviewController::class);
Route::resource('/addtoCart', CartController::class);
Route::get('/goToCart', [CartFuntionController::class, 'index'])->name('goToCart.index');
Route::delete('/goToCart', [CartFuntionController::class, 'destroy'])->name('goToCart.destroy');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::view('/thank-you', 'thank-you'); 





