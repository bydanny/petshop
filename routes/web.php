<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoLoginController;
use App\Http\Controllers\ProveedorController;
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
    return view('Auth/login');
});

Route::get('/productos', function () {
    return view('empleado/empleadoinicio');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Empleado Login
Route::get('empleado/login', [EmpleadoLoginController::class, 'showLoginForm']);
Route::post('empleado/login', [EmpleadoLoginController::class, 'login'])->name("empleado.login");
Route::resource('empleado', EmpleadoLoginController::class);

//Proveedor
Route::resource('proveedor', ProveedorController::class);
Route::post("/cerveza/scopeName", [ProveedorController::class, 'scopeName'])->name("proveedor.scopeName");
