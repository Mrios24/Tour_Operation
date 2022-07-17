<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ChoferController;
use App\Http\Controllers\VehiculosController;

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

// Route::get('layouts/template', [PrincipalController::class, 'index']);

// Route::get('/', function () {

//     return view('layouts.template');
// });

Route::resource('index', PrincipalController::class)->middleware('auth');
Route::resource('cliente', ClienteController::class)->middleware('auth');
Route::resource('proveedor', ProveedoresController::class)->middleware('auth');
Route::resource('gastos', GastosController::class)->middleware('auth');
Route::resource('chofer', ChoferController::class)->middleware('auth');
Route::resource('vehiculo', VehiculosController::class)->middleware('auth');

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->middleware('auth');
Auth::routes();

Route::get('/vehiculo/{vehiculo}', [VehiculosController::class, 'show']);
Route::post('/vehiculo', [VehiculosController::class, 'store']);