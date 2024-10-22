<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/todos',todosController::class);
Route::resource('/users',UserController::class);
Route::get('/login', function () {
  return view('login.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
