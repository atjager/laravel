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

Route::view('/', 'home');
Auth::routes();

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetitionController;
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/comps', [CompetitionController::class,'index']);

use App\Http\Controllers\ReservationController;
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', [ReservationController::class,'create']);
    Route::resource('reservations', ReservationController::class)->except('create');
});
use App\Http\Controllers\CrudsController;
Route::resource('crud',CrudsController::class);