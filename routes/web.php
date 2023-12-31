<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/login2', function () {
    return view('login2');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::view('/register', 'register');
Route::post("/login2",[UserController::class, 'login2']);
Route::post("/register",[UserController::class, 'register']);
Route::get("/",[ProductController::class, 'index']);
Route::get("detail/{id}",[ProductController::class, 'detail']);
Route::get("search",[ProductController::class, 'search']);
Route::post("add_to_cart",[ProductController::class, 'addToCart']);
Route::get("cartlist",[ProductController::class, 'cartList']);
Route::get("remove/{id}",[ProductController::class, 'removeCart']);
Route::get("ordernow",[ProductController::class, 'orderNow']);
Route::post("orderplace",[ProductController::class, 'orderPlace']);
Route::get("myorders",[ProductController::class, 'myOrders']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {

  

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {

  

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});

 
