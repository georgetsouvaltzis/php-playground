<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post("api/register",[\App\Http\Controllers\ApiController::class,'register']);
Route::post("api/login",[\App\Http\Controllers\ApiController::class,'login']);
Route::get('api/my-orders',[\App\Http\Controllers\OrderController::class,'myOrders']);
Route::get('api/categories',[\App\Http\Controllers\CategoryController::class,'listCategories']);
