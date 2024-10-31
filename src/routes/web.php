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

// Weight Log Routes
Route::get('/weight_logs', [Weight_logController::class, 'index']);

Route::get('/weight_logs/create', [Weight_logController::class, 'create'])->name('weight_logs.create');
Route::post('/weight_logs/create', [Weight_logController::class, 'store'])->name('weight_logs.store');
Route::get('/weight_logs/search', [Weight_logController::class, 'search']);
Route::get('/weight_logs/{weightLogId}', [Weight_logController::class, 'show']);
Route::patch('/weight_logs/{weightLogId}/update', [Weight_logController::class, 'edit']);
Route::delete('/weight_logs/{weightLogId}/delete', [Weight_logController::class, 'destroy']);

// Weight Target Routes
Route::get('/weight_logs/goal_setting', [Weight_targetController::class, 'index']);
Route::post('/weight_logs/goal_setting', [Weight_targetController::class, 'index']);

// User Registration Routes
Route::get('/register/step1', [UserController::class, 'step1']);
Route::post('/register/step1', [UserController::class, 'store'])->name('registration.store');
Route::post('/register/step2', [UserController::class, 'step2'])->name('initialWeight');

// Login Routes
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);