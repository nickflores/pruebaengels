<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaPagina;
use App\Http\Controllers\PnosotrosController;
use App\Http\Controllers\PdocenteController;
use App\Http\Controllers\PproductoController;
use App\Http\Controllers\PcursoController;
use App\Http\Controllers\PproyectoController;
use App\Http\Controllers\PinfoempreController;

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
    return view('welcome');
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

Route::get('/index', [RutaPagina::class,'indexT'])->name('index');
Route::get('/nosotros_', [RutaPagina::class,'nosotrosT'])->name('nosotros');
Route::get('/productos_', [RutaPagina::class,'productosT'])->name('productos');
Route::get('/cursos_', [RutaPagina::class,'cursosT'])->name('cursos');
Route::get('/proyectos_', [RutaPagina::class,'proyectosT'])->name('proyectos');
Route::get('/contactenos_', [RutaPagina::class,'contactenosT'])->name('contactenos');
Route::get('/intranet_', [RutaPagina::class,'intranetT'])->name('intranet');

Route::resource('sobre_nosotros', PnosotrosController::class);
//Plana Docente
Route::resource('plana_docente', PdocenteController::class);
Route::delete('/plana_docente/{id}', [PdocenteController::class,'destroy'])->name('plana_docente.destroy');
Route::get('/plana_docente', [PdocenteController::class, 'index'])
    ->name('plana_docente.index'); 
//informacion_empresa
Route::resource('info_empre', PinfoempreController::class);   
//Productos
Route::resource('productos', PproductoController::class);
Route::delete('/productos/{id}', [PproductoController::class,'destroy'])->name('productos.destroy');
Route::get('/productos', [PproductoController::class, 'index'])
    ->name('productos.index');
//Cursos
Route::resource('cursos', PcursoController::class);
Route::delete('/cursos/{id}', [PcursoController::class,'destroy'])->name('cursos.destroy');
Route::get('/cursos', [PcursoController::class, 'index'])
    ->name('cursos.index'); 
//Proyectos
Route::resource('proyectos', PproyectoController::class);
Route::delete('/proyectos/{id}', [PproyectoController::class,'destroy'])->name('proyectos.destroy');
Route::get('/proyectos', [PproyectoController::class, 'index'])
    ->name('proyectos.index');   

   

