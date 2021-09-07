<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create/Company', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/create/Employee', [App\Http\Controllers\EmployeeController::class, 'create']);
Route::get('/create/todo', [App\Http\Controllers\TodoController::class, 'create']);

//Store
Route::post('/store/company', [App\Http\Controllers\HomeController::class, 'store']);
Route::post('/store/employee', [App\Http\Controllers\EmployeeController::class, 'store']);
Route::post('/store/todo', [App\Http\Controllers\TodoController::class, 'store']);

//Show
Route::get('/show/companies', [App\Http\Controllers\HomeController::class, 'show'])->name('companies');
Route::get('/show/employees', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employees');
Route::get('/show/todos', [App\Http\Controllers\TodoController::class, 'show'])->name('todos');

//Edit
Route::get('/edit/company/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/edit/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'edit']);
Route::get('/edit/todo/{id}', [App\Http\Controllers\TodoController::class, 'edit']);

//Update
Route::post('/update/company/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::post('/update/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'update']);
Route::post('/update/todo/{id}', [App\Http\Controllers\TodoController::class, 'update']);

//Delete
Route::get('/delete/company/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('/delete/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy']);
Route::get('/delete/todo/{id}', [App\Http\Controllers\TodoController::class, 'destroy']);

//View Trashed
Route::get('/trashed/companies', [App\Http\Controllers\HomeController::class, 'trashed']);
Route::get('/trashed/employees', [App\Http\Controllers\EmployeeController::class, 'trashed']);
Route::get('/trashed/todos', [App\Http\Controllers\TodoController::class, 'trashed']);
Route::get('/logout', [App\Http\Controllers\TodoController::class, 'logout']);



