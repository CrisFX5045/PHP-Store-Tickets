<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/', 'App\Http\Controllers\EventController@index');

Route::get('/info/{precioTotal}/{cantidadTickets}/{id}', [EventController::class, 'info_register']);

Route::get('/confirm', [EventController::class, 'store']);

Route::get('/filter/{id}', [EventController::class, 'filter']);

Route::resource('description', EventController::class);

Route::get('/register/{id}', [EventController::class, 'register']);



Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::get('/index', [AdminController::class, 'index']);
Route::get('/create', [AdminController::class, 'create']);
Route::get('/show/{id}', [AdminController::class, 'show']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::get('/destroy/{id}', [AdminController::class, 'destroy']);

Route::resource('auth', AdminController::class);