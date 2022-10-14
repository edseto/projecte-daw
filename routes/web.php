<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RoomController;

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
Route::get('/admin', function () { return view('admin.index'); });

//Route::resource('admin/user', UsersController::class);
Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
Route::get('/admin/user/{id}', [UsersController::class, 'edit'])->name('users.edit');
Route::get('/admin/user/softdelete/{id}', [UsersController::class, 'softdelete'])->name('users.softdelete');

//Route::resource('admin/user', EstablishmentController::class);
Route::get('/admin/establishments', [EstablishmentController::class, 'index'])->name('admin.establishments');
Route::get('/admin/establishment/{id}', [EstablishmentController::class, 'edit'])->name('establishment.edit');
Route::get('/admin/establishment/softdelete/{id}', [EstablishmentController::class, 'softdelete'])->name('establishment.softdelete');

Route::get('/admin/rooms', [RoomController::class, 'index'])->name('admin.rooms');
Route::get('/admin/room/{id?}', [RoomController::class, 'edit'])->name('room.edit');
Route::post('/admin/room/update', [RoomController::class, 'update'])->name('room.update');
Route::get('/admin/room/{id}/delete', [RoomController::class, 'delete'])->name('room.delete');
