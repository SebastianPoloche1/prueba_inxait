<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[CustomerController::class, 'customer'])->name('home');
Route::post('/cities',[CustomerController::class, 'consultCities'])->name('cities');
Route::post('/customer/save',[CustomerController::class, 'saveCustomer'])->name('customer.save');
Route::get('/customer/check',[CustomerController::class, 'checkCustomer'])->name('customer.check');
Route::post('/customer/consult',[CustomerController::class, 'consultCustomer'])->name('customer.consult');
Route::post('/admin/save',[AdminController::class, 'saveAdmin'])->name('admin.save');
Route::post('/admin/check',[AdminController::class, 'checkAdmin'])->name('admin.check');
Route::get('/admin/logout',[AdminController::class, 'logoutAdmin'])->name('admin.logout');

Route::get('/admin/login',[AdminController::class, 'loginAdmin'])->name('admin.login');
Route::get('/admin/register',[AdminController::class, 'registerAdmin'])->name('admin.register');

Route::get('/admin/export', [AdminController::class, 'exportCustomer'])->name('admin.export');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin/dashboard',[AdminController::class, 'dashboardAdmin'])->name('admin.dashboard');
    Route::get('/admin/won',[AdminController::class, 'dashboardWon'])->name('admin.won');
});