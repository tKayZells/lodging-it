<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test", [ FeatureController::class, "index" ])->name("tests");
Route::get("/features", [ FeatureController::class, "index" ])->name("features");
Route::get("/features/add", [ FeatureController::class, "add" ])->name("features.add");
Route::post("features/add", [ FeatureController::class, "store" ])->name("features.store");

Route::get('/rooms', function () {
    return view('welcome');
})->name("routes");

Route::get('/rooms/add', function () {
    return view('welcome');
})->name("routes.add");

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

Route::get("/hotels", [ HotelController::class, "index" ])->name("hotels");
Route::get("/hotels/add", [ HotelController::class, "add" ])->name("hotels.add");