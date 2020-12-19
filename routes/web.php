<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CustomerController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/','SuperAdminController@index');
Route::get('/', [SuperAdminController::class, 'index']);

//employees
Route::get('/add-employees', [EmployeesController::class, 'index']);
Route::post('/save-employees', [EmployeesController::class, 'save_employees']);




//customer

Route::get('/add-customer', [CustomerController::class, 'index']);