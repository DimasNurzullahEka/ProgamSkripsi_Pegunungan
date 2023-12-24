<?php

use App\Http\Controllers\BackEnd\dashboardController;
use App\Http\Controllers\BackEnd\JenisBank_Controller;
use App\Http\Controllers\BackEnd\kendaraanController;
use App\Http\Controllers\BackEnd\pengaturanController;
use App\Http\Controllers\BackEnd\Peraturan_controller;
use App\Http\Controllers\BackEnd\userController;
use App\Http\Controllers\FrontEnd\DaftarController;
use App\Http\Controllers\FrontEnd\F_peraturanController;
use App\Http\Controllers\FrontEnd\HomeController;
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
#frontend Home
Route::get('/', [HomeController::class, 'home'])->name('home');
#frontend Booking
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
# Login page view:
Route::get('/login', [userController::class, 'login'])->middleware('guest')->name('login');

# Login post data handle:
Route::post('/login', [userController::class, 'login_verify'])->middleware('guest')->name('login.verify');

# Detail
Route::get('/dashboard', [userController::class, 'detail'])->middleware('auth')->name('detail');

Route::resource('jenis_kendaraan', kendaraanController::class);
# Logout
Route::get('/logout', [userController::class, 'logout'])->middleware('auth')->name('logout');
Route::resource('pengaturan', pengaturanController::class);
Route::resource('jenis_bank', JenisBank_Controller::class);
Route::resource('peraturan', Peraturan_controller::class);
Route::get('/b_peraturan', [Peraturan_controller::class, 'booking'])->name('setting.index');
Route::patch('/b_peraturans/{peraturan}', [Peraturan_controller::class, 'f_update'])->name('peraturans.update');
Route::get('/dataForm', [Peraturan_controller::class, 'dataForm'])->name('dataForm.frontend');
// Route::post('/dataForm', [Peraturan_controller::class, 'dataForm'])->name('dataForm.frontend');

Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar');
