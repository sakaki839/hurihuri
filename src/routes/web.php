<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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


Route::get('/', [ItemController::class, 'top']);

Route::get('/register', [ItemController::class, 'register']);

Route::get('/login', [ItemController::class, 'login']);

Route::get('/mypage', [ItemController::class, 'mypage']);

Route::get('/mypage/profile', [ItemController::class, 'profile']);

Route::get('/item', [ItemController::class, 'item']);

Route::get('/purchase/address/:item_id', [ItemController::class, 'item_id']);

Route::get('/purchase/:item_id', [ItemController::class, 'item_id1']);

Route::get('/sell', [ItemController::class, 'sell']);

Route::get('/item/:item_id', [ItemController::class, 'item_id2']);

