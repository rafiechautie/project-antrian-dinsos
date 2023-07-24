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

Route::get('/', function () {
    return view('pages.frontsite.landing-page.index');
});



Route::get('/form-tamu', [AppointmentController::class, 'index'])->middleware('guest');
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
