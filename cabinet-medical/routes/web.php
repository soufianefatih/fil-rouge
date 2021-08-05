<?php

use Illuminate\Support\Facades\Route;
use   App\Http\Controllers\PatientController;
use App\Http\Controllers\Auth\patient;
use   App\Http\Controllers\MedecinController;
use App\Http\Controllers\Auth\medecin;
use   App\Http\Controllers\ScrtController;
use App\Http\Controllers\Auth\scrt;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('patient')->group(function () {
    Route::middleware('patient')->group(function () {
        Route::name('patient')->get('/', [PatientController::class, 'index']);
    });
});

Route::prefix('medecin')->group(function () {
    Route::middleware('medecin')->group(function () {
        Route::name('medecin')->get('/',[MedecinController::class, 'index']);
    });
});

Route::prefix('scrt')->group(function () {
    Route::middleware('scrt')->group(function () {
        Route::name('scrt')->get('/',[ScrtController::class, 'index']);
    });
});


