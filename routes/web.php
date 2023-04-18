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

Route::get('/', function () {
    return view('Home');
});

Route::get('/AboutCourse', [App\Http\Controllers\HomeController::class, 'AboutCourse'])->name('AboutCourse');
Route::get('/Register', [App\Http\Controllers\HomeController::class, 'Register'])->name('Register');
Route::get('/Login', [App\Http\Controllers\HomeController::class, 'Login'])->name('Login');
Route::get('/DashboardCourse', [App\Http\Controllers\HomeController::class, 'DashboardCourse'])->name('DashboardCourse');
Route::get('/CreateCourse', [App\Http\Controllers\HomeController::class, 'CreateCourse'])->name('CreateCourse');
