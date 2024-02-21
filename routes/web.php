<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/', [AlumnoController::class, 'index'])->name('alumno.home');

Route::get('/alumno/crear', [AlumnoController::class, 'create'])->name('alumno.create');

Route::post('/alumno/guardar', [AlumnoController::class, 'store'])->name('alumno.store');

//Verbos de http
/*
*GET     mostrar o acceder
*POST    guardar
*PUT     Actualizar
*DELETE  Eliminar*/
