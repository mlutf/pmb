<?php

use App\Http\Controllers\CalonMahasiswaController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::resource('users', UsersController::class);
Route::resource('struk', LaporanController::class);
Route::resource('laporan', LaporanController::class);
Route::get('users/hapus/{id}', [UsersController::class, 'destroy']);
Route::get('calon_mahasiswa/hapus/{id}', [CalonMahasiswaController::class, 'destroy']);
Route::get('/biaya', [CalonMahasiswaController::class, 'biaya']);
// Route::get('test', [CalonMahasiswaController::class, 'create']);
Route::resource('calon_mahasiswa', CalonMahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::get('jurusan/hapus/{id}', [JurusanController::class, 'destroy']);
Route::get('/login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);
