<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

Route::view('/', 'home')->name('home');
Route::view('story', 'story')->name('story');
Route::view('gallery', 'gallery')->name('gallery');
Route::get('image', [ImageController::class, 'index']);
Route::post('store', [ImageController::class, 'store']);