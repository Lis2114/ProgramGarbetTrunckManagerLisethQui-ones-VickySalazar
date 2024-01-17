<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\RouteController;
use App\Http\Controllers\Api\V1\TruckController;
use App\Http\Controllers\Api\V1\SessionController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\ScheduleController;
use App\Http\Controllers\Api\V1\auth\AuthenticationSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Ruta para el horario
Route::apiResource('v1/schedules', ScheduleController::class);
//Ruta para los camiones
Route::apiResource('v1/trucks', TruckController::class);
//Ruta para las rutas (actualizar,eliminar)
Route::apiResource('v1/routes', RouteController::class);
// Ruta para los empleados
Route::apiResource('v1/employees', EmployeeController::class);

// rutas de inicio de sesión
Route::post('login',[SessionController::class,'login']);
Route::post('logout',[SessionController::class,'logout'])->middleware('auth:sanctum');
Route::post('register',[SessionController::class,'register']);

//Route::get('v1/schedules', [ScheduleController::class, 'showSchedules']);
