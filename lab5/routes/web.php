<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [MainController::class, 'index']);
Route::get('/all_products', [MainController::class, 'categories']);
Route::get('/add_product',[MainController::class, 'addProduct']);
Route::post('/add_product', [MainController::class, 'addProductPost']);
Route::get('/all_products/{category}', [MainController::class, 'productsByCategory']);
Route::get('/all_products/{category}/{id}', [MainController::class,'searchProduct']);

