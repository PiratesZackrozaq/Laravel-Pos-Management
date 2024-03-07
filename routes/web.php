<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/orders', 'OrderController');
Route::resource('/products', 'ProductController');
Route::resource('/suppliers', 'SupplierController');
Route::resource('/users', 'UserController');
Route::resource('/companies', 'CompanyController');
Route::resource('/transactions', 'TransactionController');
