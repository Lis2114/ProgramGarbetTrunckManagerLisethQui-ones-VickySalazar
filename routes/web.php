<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\auth\AuthenticationSessionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/welcome',[AdminController::class,'welcome'])->name('welcome');

//=========Rutas de sesión================

route::get('/login', [AuthenticationSessionController::class,'create'])->name('login');
route::post('/login', [AuthenticationSessionController::class,'store'])->name('start');
route::post('/logout', [AuthenticationSessionController::class,'destroy'])->name('logout');

route::get('/register', [RegisterUserController::class,'create'])->name('register');
route::post('/register', [RegisterUserController::class,'store'])->name('save');
