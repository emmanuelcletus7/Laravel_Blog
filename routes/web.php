<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WorldController;
use App\Http\Controllers\NigeriaController;
use App\Http\Controllers\PoliticsController;

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

Route::resource('/', BlogController::class);
Route::resource('nigeria', NigeriaController::class);
Route::resource('politics', PoliticsController::class);
Route::resource('world', WorldController::class);