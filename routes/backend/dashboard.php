<?php

use App\Http\Controllers\Backend\DashboardController;
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
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('/logout','logout')->name('dashboard.logout');
    Route::get('/auth/confirmation','confirmation')->name('dashboard.confirmation');
});
Auth::routes();
Auth::routes(['verify' => true]);
