<?php

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('pages.frontsite.landing-page.index');
    });

    Route::get('/form-tamu', [AppointmentController::class, 'index']);


    Route::get('/form-tamu/{id}', [AppointmentController::class, 'create']);

    Route::get('/success', function () {
        return view('pages.frontsite.appointment.success');
    });

    Route::post('/form-tamu/{id}', [AppointmentController::class, 'store']);
});


// Route::get('/form-tamu/')

// Route::get('/form-tamu', function () {
//     return view('form-tamu.index');
// });

// Route::prefix('/admin')->group(function () {

//     Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

//     Route::get('/index', function () {
//         return view('admin.index');
//     });
// });
