<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CpuController;
use App\Http\Controllers\admin\ProgramaController;
use App\Http\Controllers\admin\UsuarioController;
use App\Http\Controllers\admin\MonitorController;
use App\Http\Controllers\admin\TecladoController;
use App\Http\Controllers\admin\RatonController;
use App\Http\Controllers\admin\ImpresoraController;
use App\Http\Controllers\admin\ParlanteController;
use App\Http\Controllers\admin\OtrodispositivoController;
use App\Http\Controllers\admin\FormularioController;

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

Route::resource('admin/cpu', CpuController::class);
Route::resource('admin/programa', ProgramaController::class);
Route::resource('admin/usuario', UsuarioController::class);
Route::resource('admin/monitor', MonitorController::class);
Route::resource('admin/teclado', TecladoController::class);
Route::resource('admin/raton', RatonController::class);
Route::resource('admin/impresora', ImpresoraController::class);
Route::resource('admin/parlante', ParlanteController::class);
Route::resource('admin/otrodispositivo', OtrodispositivoController::class);
Route::resource('admin/formulario', FormularioController::class);

Route::get('admin/mostrarpdf', [FormularioController::class, 'mostrarpdf']);
Route::get('admin/formulariopdf/{id}', [FormularioController::class,'formularios']);

