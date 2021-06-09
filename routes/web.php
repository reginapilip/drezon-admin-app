<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);

// routes for updating

// Route::match(['get', 'post'], '/profile', ['as' => 'user_profile', 'uses' => 'App\Http\Controllers\UpdateProfileController::class@profile']);

Route::get('/profile', [App\Http\Controllers\UpdateProfileController::class, 'index'])->name('view_profile');
Route::post('/profile', [App\Http\Controllers\UpdateProfileController::class, 'profile']);



//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

