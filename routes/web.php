<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::post("add_to_cart",[ProductController::class, 'addToCart']);
Route::get("cartlist",[ProductController::class, 'cartList']);
Route::get("remove/{id}",[ProductController::class, 'removeCart']);
Route::get("ordernow",[ProductController::class, 'orderNow']);
Route::post("orderplace",[ProductController::class, 'orderPlace']);
Route::get("myorders",[ProductController::class, 'myOrders']);

