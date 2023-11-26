<?php

use App\Http\Controllers\ProfileController;
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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bienvenido.bienvenido');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('admin/cpu', CpuController::class)->middleware(['auth']);
Route::resource('admin/programa', ProgramaController::class)->middleware(['auth']);
Route::resource('admin/usuario', UsuarioController::class)->middleware(['auth']);
Route::resource('admin/monitor', MonitorController::class)->middleware(['auth']);
Route::resource('admin/teclado', TecladoController::class)->middleware(['auth']);
Route::resource('admin/raton', RatonController::class)->middleware(['auth']);
Route::resource('admin/impresora', ImpresoraController::class)->middleware(['auth']);
Route::resource('admin/parlante', ParlanteController::class)->middleware(['auth']);
Route::resource('admin/otrodispositivo', OtrodispositivoController::class)->middleware(['auth']);
Route::resource('admin/formulario', FormularioController::class)->middleware(['auth']);

Route::get('admin/mostrarpdf', [FormularioController::class, 'mostrarpdf']);
Route::get('admin/formulariopdf/{id}', [FormularioController::class,'formularios']);
