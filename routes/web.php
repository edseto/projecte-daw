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
Route::get('/', function () { return view('welcome'); })->name('landing');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
Route::post('/signup', [UsersController::class, 'signup'])->name('signup');
Route::get('/register', [UsersController::class, 'register'])->name('register');


/***************************
 * RUTES ROL ADMINISTRADOR
 ***************************/
Route::get('/admin', function () { return view('admin.index'); })->name('admin.index');

//Route::resource('admin/user', UsersController::class);
Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
Route::get('/admin/user/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/admin/user/store', [UsersController::class, 'store'])->name('users.store');
Route::get('/admin/user/{id}', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/admin/user/update', [UsersController::class, 'update'])->name('users.update');
Route::get('/admin/user/{id}/delete', [UsersController::class, 'delete'])->name('users.delete');

//Route::resource('admin/user', EstablishmentController::class);
Route::get('/admin/establishments', [EstablishmentController::class, 'index'])->name('admin.establishments');
Route::get('/admin/establishments/create', [EstablishmentController::class, 'create'])->name('establishment.create');
Route::post('/admin/establishment/store', [EstablishmentController::class, 'store'])->name('establishment.store');
Route::get('/admin/establishment/{id}', [EstablishmentController::class, 'edit'])->name('establishment.edit');
Route::post('/admin/establishment/update', [EstablishmentController::class, 'update'])->name('establishment.update');
Route::get('/admin/establishment/{id}/delete', [EstablishmentController::class, 'delete'])->name('establishment.delete');

Route::get('/admin/rooms', [RoomController::class, 'index'])->name('admin.rooms');
Route::get('/admin/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('/admin/room/store', [RoomController::class, 'store'])->name('room.store');
Route::get('/admin/room/{id?}', [RoomController::class, 'edit'])->name('room.edit');
Route::post('/admin/room/update', [RoomController::class, 'update'])->name('room.update');
Route::get('/admin/room/{id}/delete', [RoomController::class, 'delete'])->name('room.delete');


/***************************
 * RUTES ROL LLOGATER
 ***************************/
Route::get('/user', function () { return view('user.index'); })->name('user.index');
Route::get('/rooms/show/{id?}', [RoomController::class, 'show'])->name('room.show');
Route::get('/user/create', [RoomController::class, 'create'])->name('user.create');
Route::get('/user/rooms', [RoomController::class, 'index'])->name('user.rooms');


/***************************
 * RUTES ROL CLIENT(TURISTA)
 ***************************/