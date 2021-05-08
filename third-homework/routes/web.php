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
Route::get('/posts/list/{count?}',[\App\Http\Controllers\PostController::class, 'list']);
Route::get('/posts/delete/{id}',[\App\Http\Controllers\PostController::class, 'delete'])->name('deletepost');
Route::get('/posts/create',[\App\Http\Controllers\PostController::class, 'create']);
Route::get('/posts',[\App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{id}',[\App\Http\Controllers\PostController::class, 'show'])->name('showpost');


Route::get('/', function () {
    return view('welcome');
});
