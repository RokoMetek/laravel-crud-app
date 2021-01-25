<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;


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


Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('create');
Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::get('/employees/show/{id}', [EmployeeController::class, 'show']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);


Route::get('/employees', [WelcomeController::class, 'ajax'])->name('ajax');
Route::get('/table', [EmployeeController::class, 'index'])->name('table');


Route::post('/employees/store', [EmployeeController::class, 'store'])->name('store');
Route::post('/employees/update/{id}', [EmployeeController::class, 'update'])->name('update');
Route::post('/employees/destroy/{id}', [EmployeeController::class, 'destroy'])->name('destroy');

