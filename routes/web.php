<?php

use App\Http\Controllers\Backsite\AppointmentController as BacksiteAppointmentController;
use App\Http\Controllers\Backsite\BidangController;
use App\Http\Controllers\backsite\LaporanController;
use App\Http\Controllers\backsite\PegawaiController;
use App\Http\Controllers\frontsite\AppointmentController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('pages.frontsite.landing-page.index');
    });

    Route::get('/form-tamu', [AppointmentController::class, 'index']);

    Route::get('/form-tamu/{id}', [AppointmentController::class, 'create']);

    Route::post('/form-tamu/{id}', [AppointmentController::class, 'store']);

    Route::get('/success', function () {
        return view('pages.frontsite.appointment.success');
    });

    Route::get('/cetak-bukti', [AppointmentController::class, 'printPDF']);


    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'authenticate']);
// });

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('pages.backsite.dashboard.index');
    });

    Route::resource('/pegawai', PegawaiController::class)->except('show');

    Route::resource('/bidang', BidangController::class)->except('show');

    Route::resource('/appointment', BacksiteAppointmentController::class)->except('create');

    Route::get('/laporan', [LaporanController::class, 'index']);

    Route::post('/export-appointment', [LaporanController::class, 'exportByRangeDate']);
});
