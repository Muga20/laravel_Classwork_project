<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SlideController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';




// client controllers start 
Route::get('/', [clientController::class, 'index']);
Route::get('/shop', [clientController::class, 'shop']);
Route::get('/cart', [clientController::class, 'cart']);
Route::get('/checkout', [clientController::class, 'checkout']);
Route::get('/orders', [clientController::class, 'orders']);
Route::get('/login', [clientController::class, 'login']);
Route::get('/signup', [clientController::class, 'signup']);
//client controllers end 


//admin controllers start
Route::get('/admin', [AdminController::class, 'admin']);
//admin controllers end 



//category controllers start
Route::get('/addcategory', [CategoryController::class, 'addcategory']);
Route::get('/categories', [CategoryController::class, 'categories']);
//category controllers end 

//side controllers start 
Route::get('/addslider', [SlideController::class, 'addslider']);
Route::get('/sliders', [SlideController::class, 'sliders']);
//side controllers end 


//product  controllers start 
Route::get('/addproduct', [ProductController::class, 'addproduct']);
Route::get('/product', [ProductController::class, 'product']);
//product controllers end 





