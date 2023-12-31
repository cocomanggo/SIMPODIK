<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('layout.sidebar');
});


Route::get('/users', [UsersController::class, 'index']);
Route::get('/api/get_provinsi', [UsersController::class, 'get_provinsi']);
Route::get('/api/get_kabkot/{id}', [UsersController::class, 'get_kabkot']);
Route::get('/api/get_kecamatan/{id}', [UsersController::class, 'get_kecamatan']);
Route::get('/api/get_keldes/{id}', [UsersController::class, 'get_keldes']);
Route::get('/api/get_penghasilan', [UsersController::class, 'get_penghasilan']);
Route::get('/api/get_pekerjaan', [UsersController::class, 'get_pekerjaan']);
Route::post('/api/saveNewSiswa', [UsersController::class, 'saveNewSiswa']);


