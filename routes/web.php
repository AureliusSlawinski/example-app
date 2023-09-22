<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/user/list', [\App\Http\Controllers\UserController::class, 'list']);
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('/user/create', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'destroy']);
