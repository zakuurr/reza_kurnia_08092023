<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', [PegawaiController::class, 'index']);


Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/{id}', [PegawaiController::class, 'detail'])->where('id', '[0-9]+');
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);
Route::get('/biodata', [BiodataController::class, 'index']);




