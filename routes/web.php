<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('main.landing', [
        'title' => "Home"
    ]);
});

Route::get('/login', [UserController::class, 'index'])->middleware('guest');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('logout', [UserController::class, 'logout']);

Route::post('store-user', [UserController::class, 'store']);

Route::post('login', [UserController::class, 'login']);


//Admin

Route::get('/admin/home', [LandingController::class, 'admin'])->middleware('admin');