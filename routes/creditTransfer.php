<?php

use App\Models\CreditTransfer\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\CreditTransfer\Department;
use App\Http\Controllers\CreditTransfer\SubjectController;
use App\Http\Controllers\CreditTransfer\DashboardController;
use App\Http\Controllers\CreditTransfer\Auth\LoginController;
use App\Http\Controllers\CreditTransfer\CollegeController;
use Illuminate\Support\Facades\Hash;

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


Route::group(['namespace' => 'creditTransfer', 'prefix' => 'creditTransfer', 'middleware' => 'auth:creditTransfer'], function () {
  Route::get('/', [DashboardController::class, 'index'])->name('credit.dashboard');
  Route::get('/logout', [LoginController::class, 'logout'])->name('credit.logout');
});
Route::group(['namespace' => 'creditTransfer', 'prefix' => 'creditTransfer', 'middleware' => 'guest:creditTransfer'], function () {
  Route::get('login', [LoginController::class, 'index'])->name('credit.loginView');
  Route::post('login', [LoginController::class, 'login'])->name('credit.login');
});



/*
  Subjects
*/
Route::group(['prefix' => 'creditTransfer'], function () {
  Route::resource('subject', SubjectController::class);
});


/*
  Colleges
*/
Route::group(['prefix' => 'creditTransfer'], function () {
  Route::resource('college', CollegeController::class);
});


Route::get('/', function (){
  Department::create([
    'department_en' => 'Humman Resources',
    'department_ar' => 'الموارد البشرية'
  ]);

  Department::create([
    'department_en' => 'Nursing',
    'department_ar' => 'التمريض'
  ]);

  User::create([
    'name' => 'Islam Bassiem Abdelfattah Aboukila',
    'email' => 'islam@inaya.edu.sa',
    'empid' => '500322',
    'department_id' => '1',
    'password' => Hash::make('123')
  ]);

  User::create([
    'name' => 'Rawhia Saleh Salah Doghaim',
    'email' => 'rawhia@inaya.edu.sa',
    'empid' => '500545',
    'department_id' => '2',
    'password' => Hash::make('123')
  ]);
});
Route::get('/{page}', [AdminController::class, 'index']);
