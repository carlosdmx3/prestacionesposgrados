<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhatsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\RegistroposgradoController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\FoliosController;
use App\Http\Controllers\UserRegController;
use App\Http\Controllers\RestorePwdController;

use App\Http\Controllers\EjemploCOntroller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('programas-apoyo', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('buscar-programas', [App\Http\Controllers\WhatsController::class, 'index'])->name('whats');
Route::get('ver-programas', [SearchController::class, 'index'])->name('search');
Route::get('programas-por-ubicacion', [App\Http\Controllers\LocationController::class, 'index'])->name('location');
Route::get('registro-programas', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::get('recuperacion-de-acceso', [RestorePwdController::class, 'index'])->name('restorepwd');


Route::middleware(["auth"])->group(function () {
    Route::get('registro-posgrados', [RegistroposgradoController::class, 'index'])->name('regisroPosgrado');
    Route::get('mis-prestaciones', [DocenteController::class, 'index'])->name('docente');
        
/*Route::get('validacion-personal-docente', [ValidationController::class, 'index'])->name('validation');*/

});

Route::resource('admin', SolicitudController::class);
Route::resource('folios', FoliosController::class);

Route::resource('usuarios', UserRegController::class);

Route::resource('ejemplo', EjemploCOntroller::class);
//  Route::get('registro-folios', [FoliosController::class, 'index'])->name('admin.folios.index');

//Route::resource('solicitudes-posgrados', [SolicitudesController::class, 'index'])->name('admin.index');


