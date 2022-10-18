<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-employee',[EmployeeController::class,'addEmployee']);

Route::get('/export-excle',[EmployeeController::class,'exportIntoExcel']);

Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV']);

Route::get('/all-employee',[EmployeeController::class,'allEmployee']);

Route::get('/import-form',[EmployeeController::class,'importFrom']);

Route::post('/import',[EmployeeController::class,'import'])->name('employee.import');