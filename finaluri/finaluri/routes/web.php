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

Route::post('api/register', [\App\Http\Controllers\APIController::class,'register']);
Route::post('api/login', [\App\Http\Controllers\APIController::class,'login']);
Route::get('api/allPosts', [\App\Http\Controllers\PostController::class,'index'])->middleware('auth:api');
Route::get('api/users', [\App\Http\Controllers\APIController::class,'allUsers'])->middleware('auth:api');
Route::post('api/posts/create',[\App\Http\Controllers\PostController::class,'store'])->middleware('auth:api');
Route::get('api/posts/{id}',[\App\Http\Controllers\PostController::class,'show'])->middleware('auth:api');
Route::get('api/myposts', [\App\Http\Controllers\PostController::class,'myPosts'])->middleware('auth:api');

