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

// Login page & Logout 
Route::any('/login', [App\Http\Controllers\HomeController::class, 'Login'])->name('login');
Route::any('/logIn', [App\Http\Controllers\Auth\LoginController::class, 'Login'])->name('loginS');
Route::any('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::any('/', [App\Http\Controllers\HomeController::class, 'Home'])->name('Home');
Route::any('/AboutCourse-{id}', [App\Http\Controllers\HomeController::class, 'AboutCourse'])->name('AboutCourse');
Route::any('/Register', [App\Http\Controllers\HomeController::class, 'Register'])->name('Register');
Route::any('/RegisterToCourse', [App\Http\Controllers\HomeController::class, 'signToCourse'])->name('RegisterTC');


Route::any('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


// Owner 
Route::get('/CreateCourse', [App\Http\Controllers\OwnerController::class, 'CreateCourse'])->name('CreateCourse');

Route::any('/DashboardCourse', [App\Http\Controllers\OwnerController::class, 'DashboardCourse'])->name('DashboardCourse');
