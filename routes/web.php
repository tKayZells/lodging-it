<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomFeaturesController;
use App\Http\Controllers\RoomImagesController;
use App\Http\Controllers\RoomSpecificsController;

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

Route::get('/', function () {
    return response()->redirectToRoute("features");
})->name("home");

Route::get("/features", [ FeatureController::class, "index" ])->name("features");
Route::get("/features/add", [ FeatureController::class, "add" ])->name("features.add");
Route::post("features/add", [ FeatureController::class, "store" ])->name("features.store");

Route::get('/rooms', [ RoomController::class, "index" ] )->name("rooms");
Route::get('/rooms/add', [ RoomController::class, "add" ] )->name("rooms.add");
Route::post('/rooms/add', [ RoomController::class, "store" ] )->name("rooms.store");

Route::get('/rooms/add/{room}/specifics', [ RoomSpecificsController::class, "add" ])->name("room.specifics.add");
Route::post('/rooms/add/specifics', [ RoomSpecificsController::class, "store" ])->name("room.specifics.store");

Route::get('/rooms/add/{room}/images', [ RoomImagesController::class, "add" ])->name("room.images.add");
Route::post('/rooms/add/images', [ RoomImagesController::class, "store" ])->name("room.images.store");

Route::get('/rooms/add/{room}/features', [ RoomFeaturesController::class, "add" ])->name("room.features.add");
Route::post('/rooms/add/features', [ RoomFeaturesController::class, "store" ])->name("room.features.store");

Route::get("/hotels", [ HotelController::class, "index" ])->name("hotels");
Route::get("/hotels/add", [ HotelController::class, "add" ])->name("hotels.add");
Route::post("/hotels/add", [ HotelController::class, "store" ])->name("hotels.store");

Route::get('/customers', function () {
    return view('welcome');
})->name("customers");

Route::get('/customer/add', function () {
    return view('welcome');
})->name("customers.add");

Route::get('/orders', function () {
    return view('welcome');
})->name("orders");

Route::get('/orders/add', function () {
    return view('welcome');
})->name("orders.add");