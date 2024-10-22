<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/todos',todosController::class);
Route::resource('/users',UserController::class);
Route::get('/login', function () {
  return view('login');
});