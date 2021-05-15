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
Route::get('/{count?}', [\App\Http\Controllers\ApplicantsController::class, 'index'])->name('index');
Route::get('/applicants/{id}/show', [\App\Http\Controllers\ApplicantsController::class, 'show'])->name('show');
Route::post('/applicants/{id}/edit', [\App\Http\Controllers\ApplicantsController::class, 'edit'])->name('edit');
Route::get('/applicants/{id}/ishired', [\App\Http\Controllers\ApplicantsController::class, 'isHiredUpdate'])->name('isHiredUpdate');
Route::get('/applicants/{id}/delete', [\App\Http\Controllers\ApplicantsController::class, 'delete'])->name('delete');
//Route::get('/', function () {
//    return view('welcome');
//});
