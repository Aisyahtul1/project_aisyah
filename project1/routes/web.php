<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by tRhe RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tes-git', function () {
//     return "Hallo, ini cuma coba pakai git";
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jurusan/', [JurusanController::class, 'index']);
Route::get('/jurusan/form/', [JurusanController::class, 'create']);
Route::get('/mahasiswa/', [MahasiswaController::class, 'index']);
