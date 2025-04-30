<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AddressController;
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

Route::get('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/mypage', [ItemController::class, 'mypage']);

Route::get('/mypage/profile', [ProfileController::class, 'profile']);

Route::get('/item', [ItemController::class, 'item']);

Route::get('/purchase/address/:item_id', [AddressController::class, 'item_id']);

Route::get('/purchase/:item_id', [PurchaseController::class, 'item_id1']);

Route::get('/sell', [ItemController::class, 'sell']);

Route::get('/item/:item_id', [ItemController::class, 'item_id2']);

