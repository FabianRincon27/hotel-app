<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::get('/', [HotelController::class, 'getHotels'])->name('hotel-get');
Route::post('/', [HotelController::class, 'postHotel'])->name('hotel-post');
Route::post('update/{id}', [HotelController::class, 'updateHotel'])->name('hotel-update');
Route::post('rooms/{id}', [HotelController::class, 'postRooms'])->name('rooms-post');
Route::post('rooms/edit/[id]', [HotelController::class, 'postEditRooms'])->name('rooms-edit-post');
