<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Models\Admin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminController::class,'adminLogin'])->name('admin.login');
Route::group(['middleware'=> 'admin'],function(){
    Route::get('admin/dashboard', [DashboardController::class,'adminDashboard'])->name('admin.dashboard');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
