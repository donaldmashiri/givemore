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

Route::get('/', function () { return view('welcome');});
Route::get('/passregister', function () { return view('passregister');});
Route::get('/passlogin', function () { return view('passlogin');});
Route::get('/adminlogin', function () { return view('adminlogin');});
Route::get('/booktaxi', function () { return view('booktaxi');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all_vehicles', [App\Http\Controllers\HomeController::class, 'all_vehicles'])->name('home');
//Route::get('/adminlogin', [App\Http\Controllers\HomeController::class, 'adminlogin'])->name('home');

Route::resource('/users', \App\Http\Controllers\UserController::class);
Route::resource('/taxidrivers', \App\Http\Controllers\TaxiDriverController::class);
Route::resource('/vehicles', \App\Http\Controllers\VehicleController::class);
Route::resource('/booktaxis', \App\Http\Controllers\BookTaxiController::class);
Route::resource('/chats', \App\Http\Controllers\ChatController::class);
