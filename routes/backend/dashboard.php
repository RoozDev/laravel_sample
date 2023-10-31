<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard','index')->name('dashboard')->middleware('auth');
    Route::get('/logout','logout')->name('dashboard.logout');
    Route::get('/auth/confirmation','confirmation')->name('dashboard.confirmation');
});
Route::controller(UserController::class)->group(function (){
   Route::get('/users','index')->name('users.index')->middleware('auth');
   Route::post('/users/store','store')->name('users.store')->middleware('auth');
    Route::get('/users/edit/{id}','edit')->name('users.edit')->middleware('auth');
    Route::post('/users/update','update')->name('users.update')->middleware('auth');
});

Auth::routes();
Auth::routes(['verify' => true]);
