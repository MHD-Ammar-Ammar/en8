<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InverterController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inveters1/{id}', [App\Http\Controllers\InverterController::class, 'show1'])->name('inverter.show1')->middleware('auth');

Route::resource('inverters', InverterController::class);
