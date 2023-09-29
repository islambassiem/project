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

Route::group(['prefix' => 'creditTransfer'],function () {
  Route::get('login', [LoginController::class, 'index'])->name('credit.loginView');
  Route::post('/', [LoginController::class, 'login'])->name('credit.login');
});
