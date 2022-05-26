<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/awards', [MainController::class, 'awards'])->name('awards');
Route::get('/awards/{id}', [MainController::class, 'getAwardsById'])->name('getAwardsById');
Route::get('/artists', [MainController::class, 'artists'])->name('artists');
Route::get('/artists/{id}', [MainController::class, 'getArtistsById'])->name('getArtistsById');
Route::get('/paintings', [MainController::class, 'paintings'])->name('paintings');
Route::get('/paintings/{id}', [MainController::class, 'getPaintingsById'])->name('getPaintingsById');
Route::get('/addPaint', [MainController::class, 'addPaint'])->name('addPaint');
Route::post('/addPaint', [MainController::class,'addPaintPost'])->name('addPaintPost');

