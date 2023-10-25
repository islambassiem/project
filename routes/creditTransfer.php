<?php

use Illuminate\Support\Facades\DB;
use App\Models\CreditTransfer\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\CreditTransfer\College;
use App\Http\Controllers\AdminController;
use App\Models\CreditTransfer\Department;
use App\Http\Controllers\CreditTransfer\CollegeController;
use App\Http\Controllers\CreditTransfer\SubjectController;
use App\Http\Controllers\CreditTransfer\DashboardController;
use App\Http\Controllers\CreditTransfer\Auth\LoginController;
use App\Http\Controllers\CreditTransfer\TransactionController;
use App\Http\Controllers\CreditTransfer\TransferableController;
use App\Http\Controllers\CreditTransfer\SpecilaizationController;


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


Route::group(['namespace' => 'creditTransfer', 'prefix' => 'transfer', 'middleware' => 'auth:creditTransfer'], function () {
  Route::get('/', [DashboardController::class, 'index'])->name('credit.dashboard');
  Route::get('/logout', [LoginController::class, 'logout'])->name('credit.logout');
});
Route::group(['namespace' => 'creditTransfer', 'prefix' => 'creditTransfer', 'middleware' => 'guest:creditTransfer'], function () {
  Route::get('login', [LoginController::class, 'index'])->name('credit.loginView');
  Route::post('login', [LoginController::class, 'login'])->name('credit.login');
});



Route::group(['prefix' => 'transfer'], function () {
  Route::resource('subject', SubjectController::class);
  Route::resource('college', CollegeController::class);
  Route::resource('transferable', TransferableController::class);
  Route::resource('specialization', SpecilaizationController::class);
  Route::resource('transaction', TransactionController::class);

  Route::post('transaction/{college_id}', [TransactionController::class, 'filterTransferables'])->name('transactionTransferable');
});

Route::get('/', function (){
//   Department::create([
//     'name' => 'Nursing'
//   ]);
//   User::create([
//     'name' => 'Islam Bassiem',
//     'email' => 'islambassiem@inaya.edu.sa',
//     'empid' => '500322',
//     'department_id' => '1',
//     'password' => Hash::make('123')
//   ]);

  // College::create([
  //   'name' => 'Inaya Medical Colleges',
  //   'user_id' => '1'
  // ]);
});


Route::get('/{page}', [AdminController::class, 'index']);
