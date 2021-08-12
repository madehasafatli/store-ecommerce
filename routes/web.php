<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
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

Route::get('/',[Controller::class,'index'])->name('welcome');

Route::group(['middleware' => ['auth' , 'verified' , 'auth:sanctum']],function (){

    Route::get('dashboard',[DashboardController::class , 'index'])->name('dashboard');
    Route::get('logout',[Controller::class , 'logout'])->name('logout');

});
