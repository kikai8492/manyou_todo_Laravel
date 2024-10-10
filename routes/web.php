<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/todos',todosController::class);
