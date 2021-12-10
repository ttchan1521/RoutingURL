<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\StickerController;
use App\Http\Controllers\IconController;

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

Route::get('/', indexController::class);
Route::get('/sticker', StickerController::class);
Route::get('/icon', IconController::class);
Route::get('/icon/{img}', [IconController::class, 'getOne']);
Route::get('sticker/{img}', [StickerController::class, 'getOne']);
