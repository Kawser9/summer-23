<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[DashController::class,'home']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about']);