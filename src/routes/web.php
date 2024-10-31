<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Weight_targetController;
use App\Http\Controllers\Weight_logController;
use App\Http\Controllers\UserController;

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

Route::get('/weight_logs', [Weight_logController::class, 'index']);

Route::get('/weight_logs/create', [Weight_logController::class, 'create']);
Route::post('/weight_logs/create', [Weight_logController::class, 'create']);
Route::get('/weight_logs/search', [Weight_logController::class, 'search']);
Route::get('/weight_logs/{:weightLogId}', [Weight_logController::class, 'show']);
Route::patch('/weight_logs/{:weightLogId}/update', [Weight_logController::class, 'edit']);
Route::delete('/weight_logs/{:weightLogId}/delete', [Weight_logController::class, 'destroy']);

Route::get('/weight_logs/goal_setting', [Weight_targetController::class, 'index']);
Route::post('/weight_logs/goal_setting', [Weight_targetController::class, 'index']);

Route::post('/register/step1', [UserController::class, 'step1']);
Route::post('/register/step2', [UserController::class, 'step2']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
