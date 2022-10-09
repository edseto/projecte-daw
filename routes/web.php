<?php

use App\Http\Controllers\EstablishmentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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


/************************
 * RUTES GENERALS
 ************************/
Route::get('/', function () { return view('welcome'); });


/***************************
 * RUTES ROL ADMINISTRADOR
 ***************************/
Route::get('admin/', function () { return view('admin.index'); });

//Route::resource('admin/user', UsersController::class);
Route::get('admin/users', UsersController::class, 'index');
Route::get('admin/user', UsersController::class, 'edit');

//Route::resource('admin/user', UsersController::class);
Route::get('admin/establishments', EstablishmentsController::class, 'index');
Route::get('admin/establishment', EstablishmentsController::class, 'edit');