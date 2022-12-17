<?php

use App\Http\Controllers\PendonorController;
use App\Http\Controllers\SyaratdonorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Syarat Donor
Route::get('/SyaratDonor', [SyaratdonorController::class, 'index']);
Route::get('/SyaratDonor/create', [SyaratdonorController::class, 'create']);
Route::post('/SyaratDonor', [SyaratdonorController::class, 'store']);
Route::delete('/SyaratDonor/{syaratdonor}', [SyaratdonorController::class, 'destroy']);
Route::get('/SyaratDonor/{syaratdonor}/edit', [SyaratdonorController::class, 'edit']);
Route::patch('/SyaratDonor/{syaratdonor}', [SyaratdonorController::class, 'update']);

// Pendonor
Route::get('/Pendonor', [PendonorController::class, 'index']);
Route::get('/Pendonor/create', [PendonorController::class, 'create']);
Route::post('/Pendonor', [PendonorController::class, 'store']);
Route::delete('/Pendonor/{pendonor}', [PendonorController::class, 'destroy']);
Route::get('/Pendonor/{pendonor}/edit', [PendonorController::class, 'edit']);
Route::patch('/Pendonor/{pendonor}', [PendonorController::class, 'update']);
