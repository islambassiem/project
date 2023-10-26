<?php

use Illuminate\Support\Facades\DB;
use App\Models\CreditTransfer\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\CreditTransfer\College;
use App\Models\CreditTransfer\Subject;
use App\Http\Controllers\AdminController;
use App\Models\CreditTransfer\Department;
use App\Models\CreditTransfer\Specialization;
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
  // Department::create(['name' => 'Nursing']);
  // Department::create(['name' => 'Biomedical Technology']);
  // Department::create(['name' => 'Clincial Laboratory Sciences']);
  // Department::create(['name' => 'Dental Hygine']);
  // Department::create(['name' => 'Respiratory Therapy']);
  // Department::create(['name' => 'Emergency Medical Services']);
  // Department::create(['name' => 'Radiological Sciences']);
  // Department::create(['name' => 'Nuclear Medicine Technology']);
  // Department::create(['name' => 'Health Information Systems']);
  // Department::create(['name' => 'Health Adminstration']);


  // Specialization::create(['name' => 'Nursing', 'user_id' => 1]);
  // Specialization::create(['name' => 'Biomedical Technology', 'user_id' => 1]);
  // Specialization::create(['name' => 'Clincial Laboratory Sciences', 'user_id' => 1]);
  // Specialization::create(['name' => 'Dental Hygine', 'user_id' => 1]);
  // Specialization::create(['name' => 'Respiratory Therapy', 'user_id' => 1]);
  // Specialization::create(['name' => 'Emergency Medical Services', 'user_id' => 1]);
  // Specialization::create(['name' => 'Radiological Sciences', 'user_id' => 1]);
  // Specialization::create(['name' => 'Nuclear Medicine Technology', 'user_id' => 1]);
  // Specialization::create(['name' => 'Health Information Systems', 'user_id' => 1]);
  // Specialization::create(['name' => 'Health Adminstration', 'user_id' => 1]);



  // User::create([
  //   'name' => 'Islam Bassiem',
  //   'email' => 'islambassiem@inaya.edu.sa',
  //   'empid' => '500322',
  //   'department_id' => '1',
  //   'password' => Hash::make('123')
  // ]);

  // College::create(['name' => 'Inaya Medical Colleges','user_id' => '1']);
  // College::create(['name' => 'Alghad','user_id' => '1']);
  // College::create(['name' => 'Dar Aloloum','user_id' => '1']);
  // College::create(['name' => 'Riyadh AlElm','user_id' => '1']);
  // College::create(['name' => 'Almearefa','user_id' => '1']);
  // College::create(['name' => 'King Saud University','user_id' => '1']);
  // College::create(['name' => 'Princess Noura University','user_id' => '1']);
  // College::create(['name' => 'King Sattam University','user_id' => '1']);

  // Subject::create(['name' => 'Arabic Language', 'code' => 'ARAB 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Writing In Arabic Language', 'code' => 'ARAB 103', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Biology', 'code' => 'BIOL 101', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Biostatistics', 'code' => 'BIOS 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Anatomy, Embryology & Histology', 'code' => 'BMS 231', 'hours' => '6', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Physiology', 'code' => 'BMS 232', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Biochemistry ', 'code' => 'BMS 233', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Medical Ethics ', 'code' => 'BMS 234 ', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Microbiology ', 'code' => 'BMS 241', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Pharmacology', 'code' => 'BMS 242', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Pathophysiology', 'code' => 'BMS 243', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Epidemiology', 'code' => 'BMS 244', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Clinical Nutrition', 'code' => 'BMS 245', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Health Assessment - Theory', 'code' => 'BMS 246', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Health Assessment - Practice', 'code' => 'BMS 247', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Human Growth And Development', 'code' => 'BMS 351', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Principles Of Learning And Health Education', 'code' => 'BMS 361', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Introduction To Chemistry', 'code' => 'CHEM 101', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Communication Skills', 'code' => 'COMM 101', 'hours' => '2', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Computer For Health Sciences', 'code' => 'COMP 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'English Language (I)', 'code' => 'ENGL 101', 'hours' => '12', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'English Language (II)', 'code' => 'ENGL 102', 'hours' => '6', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Medical Terminology', 'code' => 'ENGL 105', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Ethics In Health Care', 'code' => 'ETH 101', 'hours' => '2', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Medical Jurisprudence', 'code' => 'ISLM 105', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Family in Islam', 'code' => 'ISLM 106', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Economic System In Islam', 'code' => 'ISLM 107', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Human Rights', 'code' => 'ISLM 108', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Introduction To Nursing Profession', 'code' => 'NUR 230', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Foundations Of Nursing - Theory', 'code' => 'NUR 231', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Foundations Of Nursing/Practice', 'code' => 'NUR 232', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Microbial Infection Control', 'code' => 'NUR 240', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Adult Health Nursing  - Theory', 'code' => 'NUR 351', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Adult Health Nursing - Practice', 'code' => 'NUR 352', 'hours' => '6', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Reproductive Health Nursing - Theory', 'code' => 'NUR 353', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Reproductive Health Nursing - Practice', 'code' => 'NUR 354', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Nursing Informatics', 'code' => 'NUR 361', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Child Health Nursing - Theory', 'code' => 'NUR 362', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Child Health Nursing - Practice', 'code' => 'NUR 363', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Nursing Research', 'code' => 'NUR 471', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Current Issues In Nursing', 'code' => 'NUR 472', 'hours' => '3', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Human Genetics In Nursing Practice', 'code' => 'NUR 473', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Critical Health Nursing - Theory', 'code' => 'NUR 475', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Critical Health Nursing - Practice', 'code' => 'NUR 476', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Community Health Nursing - Theory', 'code' => 'NUR 481', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Community Health Nursing - Practice', 'code' => 'NUR 482', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Psychiatric - Mental Health Nursing - Theory', 'code' => 'NUR 483', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Psychiatric - Mental Health Nursing - Practice', 'code' => 'NUR 484', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Nursing ManagementAnd Leadership', 'code' => 'NUR 485', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Independent Studies', 'code' => 'NUR 486', 'hours' => '4', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'Orientation', 'code' => 'ORI 000', 'hours' => '0', 'user_id' => '1', 'college_id' => '1']);
  // Subject::create(['name' => 'General Physics', 'code' => 'PHYS 101', 'hours' => '5', 'user_id' => '1', 'college_id' => '1']);



  // Subject::create(['name' => 'Arabic Language', 'code' => 'ARAB 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Writing In Arabic Language', 'code' => 'ARAB 103', 'hours' => '3', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Biology', 'code' => 'BIOL 101', 'hours' => '4', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Biostatistics', 'code' => 'BIOS 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Anatomy, Embryology & Histology', 'code' => 'BMS 231', 'hours' => '6', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Physiology', 'code' => 'BMS 232', 'hours' => '4', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Biochemistry ', 'code' => 'BMS 233', 'hours' => '4', 'user_id' => '1', 'college_id' => '2']);
  // Subject::create(['name' => 'Medical Ethics ', 'code' => 'BMS 234 ', 'hours' => '3', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Microbiology ', 'code' => 'BMS 241', 'hours' => '3', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Pharmacology', 'code' => 'BMS 242', 'hours' => '3', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Pathophysiology', 'code' => 'BMS 243', 'hours' => '4', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Epidemiology', 'code' => 'BMS 244', 'hours' => '4', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Clinical Nutrition', 'code' => 'BMS 245', 'hours' => '5', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Health Assessment - Theory', 'code' => 'BMS 246', 'hours' => '3', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Health Assessment - Practice', 'code' => 'BMS 247', 'hours' => '3', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Human Growth And Development', 'code' => 'BMS 351', 'hours' => '4', 'user_id' => '1', 'college_id' => '3']);
  // Subject::create(['name' => 'Principles Of Learning And Health Education', 'code' => 'BMS 361', 'hours' => '3', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Introduction To Chemistry', 'code' => 'CHEM 101', 'hours' => '4', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Communication Skills', 'code' => 'COMM 101', 'hours' => '2', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Computer For Health Sciences', 'code' => 'COMP 101', 'hours' => '3', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'English Language (I)', 'code' => 'ENGL 101', 'hours' => '12', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'English Language (II)', 'code' => 'ENGL 102', 'hours' => '6', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Medical Terminology', 'code' => 'ENGL 105', 'hours' => '4', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Ethics In Health Care', 'code' => 'ETH 101', 'hours' => '2', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Medical Jurisprudence', 'code' => 'ISLM 105', 'hours' => '3', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Family in Islam', 'code' => 'ISLM 106', 'hours' => '3', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Economic System In Islam', 'code' => 'ISLM 107', 'hours' => '3', 'user_id' => '1', 'college_id' => '4']);
  // Subject::create(['name' => 'Human Rights', 'code' => 'ISLM 108', 'hours' => '3', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Introduction To Nursing Profession', 'code' => 'NUR 230', 'hours' => '5', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Foundations Of Nursing - Theory', 'code' => 'NUR 231', 'hours' => '5', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Foundations Of Nursing/Practice', 'code' => 'NUR 232', 'hours' => '4', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Microbial Infection Control', 'code' => 'NUR 240', 'hours' => '4', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Adult Health Nursing  - Theory', 'code' => 'NUR 351', 'hours' => '5', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Adult Health Nursing - Practice', 'code' => 'NUR 352', 'hours' => '6', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Reproductive Health Nursing - Theory', 'code' => 'NUR 353', 'hours' => '5', 'user_id' => '1', 'college_id' => '5']);
  // Subject::create(['name' => 'Reproductive Health Nursing - Practice', 'code' => 'NUR 354', 'hours' => '4', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Nursing Informatics', 'code' => 'NUR 361', 'hours' => '3', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Child Health Nursing - Theory', 'code' => 'NUR 362', 'hours' => '5', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Child Health Nursing - Practice', 'code' => 'NUR 363', 'hours' => '4', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Nursing Research', 'code' => 'NUR 471', 'hours' => '5', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Current Issues In Nursing', 'code' => 'NUR 472', 'hours' => '3', 'user_id' => '1', 'college_id' => '6']);
  // Subject::create(['name' => 'Human Genetics In Nursing Practice', 'code' => 'NUR 473', 'hours' => '4', 'user_id' => '1', 'college_id' => '7']);
  // Subject::create(['name' => 'Critical Health Nursing - Theory', 'code' => 'NUR 475', 'hours' => '5', 'user_id' => '1', 'college_id' => '7']);
  // Subject::create(['name' => 'Critical Health Nursing - Practice', 'code' => 'NUR 476', 'hours' => '5', 'user_id' => '1', 'college_id' => '7']);
  // Subject::create(['name' => 'Community Health Nursing - Theory', 'code' => 'NUR 481', 'hours' => '5', 'user_id' => '1', 'college_id' => '7']);
  // Subject::create(['name' => 'Community Health Nursing - Practice', 'code' => 'NUR 482', 'hours' => '4', 'user_id' => '1', 'college_id' => '7']);
  // Subject::create(['name' => 'Psychiatric - Mental Health Nursing - Theory', 'code' => 'NUR 483', 'hours' => '5', 'user_id' => '1', 'college_id' => '8']);
  // Subject::create(['name' => 'Psychiatric - Mental Health Nursing - Practice', 'code' => 'NUR 484', 'hours' => '4', 'user_id' => '1', 'college_id' => '8']);
  // Subject::create(['name' => 'Nursing ManagementAnd Leadership', 'code' => 'NUR 485', 'hours' => '5', 'user_id' => '1', 'college_id' => '8']);
  // Subject::create(['name' => 'Independent Studies', 'code' => 'NUR 486', 'hours' => '4', 'user_id' => '1', 'college_id' => '8']);
  // Subject::create(['name' => 'Orientation', 'code' => 'ORI 000', 'hours' => '0', 'user_id' => '1', 'college_id' => '8']);
  // Subject::create(['name' => 'General Physics', 'code' => 'PHYS 101', 'hours' => '5', 'user_id' => '1', 'college_id' => '8']);

});


Route::get('/{page}', [AdminController::class, 'index']);
