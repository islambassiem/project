<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreditTransfer\Auth\LoginController;
use App\Http\Controllers\CreditTransfer\DashboardController;

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


// Route::get('/{page}', [AdminController::class, 'index']);
Route::group(['namespace' => 'creditTransfer', 'prefix' => 'creditTransfer', 'middleware' => 'auth:creditTransfer'],function () {
  Route::get('/', [DashboardController::class, 'index'])->name('credit.dashboard');
  Route::get('/logout', [LoginController::class, 'logout'])->name('credit.logout');
});
Route::group(['namespace' => 'creditTransfer', 'prefix' => 'creditTransfer', 'middleware' => 'guest:creditTransfer'],function () {
  Route::get('login', [LoginController::class, 'index'])->name('credit.loginView');
  Route::post('login', [LoginController::class, 'login'])->name('credit.login');
});
