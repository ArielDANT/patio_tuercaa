<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('empleados', App\Http\Controllers\EmpleadosController::class);


Route::resource('vehiculos', App\Http\Controllers\VehiculosController::class);


Route::resource('empresas', App\Http\Controllers\EmpresaController::class);


Route::resource('proveedores', App\Http\Controllers\ProveedoresController::class);


Route::resource('clientes', App\Http\Controllers\ClientesController::class);


Route::resource('users', App\Http\Controllers\UsersController::class);
