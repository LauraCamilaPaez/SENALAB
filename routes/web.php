<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
// cuse App\Http\Controllers\CertificadoController;

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

Route::get('/', IndexController::class);

// Route::resource('certificado', CertificadoController::class);
