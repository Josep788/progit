<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DescargaController;
use App\Http\Controllers\ProfileController;

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
    return view('bienvenido');
});

Route::get('/sakila/listadoactor', [ActorController::class, 'actor'])->middleware(['auth'])->name('saki.listaractores');
Route::get('/sakila/crearactor', [ActorController::class, 'create'])->middleware(['auth'])->name('saki.crearactores');
Route::post('/sakila/newactor', [ActorController::class, 'store']);
Route::get('/sakila/borraractor/{id}', [ActorController::class, 'delete'])->middleware(['auth'])->name('saki.actorborrado');
Route::get('/sakila/actualizaractor/{id}', [ActorController::class, 'editar'])->middleware(['auth'])->name('saki.modificaractores');
Route::put('/sakila/editactor/{id}', [ActorController::class, 'update'])->name('saki.updateactores');
Route::get('/sakila/listadopelicula', [FilmController::class, 'film'])->middleware(['auth'])->name('saki.listarpelis');
Route::get('/sakila/crearpelicula', [FilmController::class, 'crear'])->middleware(['auth'])->name('saki.crearpelis');
Route::post('/sakila/newpelicula', [FilmController::class, 'stored']);
Route::get('/sakila/borrarpelicula/{id}', [FilmController::class, 'deleted'])->middleware(['auth'])->name('saki.peliborrado');
Route::get('/sakila/actulizarpelicula/{id}', [FilmController::class, 'edit'])->middleware(['auth'])->name('saki.modificarpelis');
Route::put('/sakila/editpelicula/{id}', [FilmController::class, 'updated'])->name('saki.updatedpelis');
Route::get('/sakila/consultas', [ConsultaController::class, 'consulta'])->middleware(['auth'])->name('saki.consultas');
Route::get('/sakila/filtrar1', [ConsultaController::class, 'pagina1'])->middleware(['auth'])->name('saki.filtro1');
Route::post('/sakila/infofiltro1', [ConsultaController::class, 'infoconsult1']);
Route::get('/sakila/filtrar2', [ConsultaController::class, 'pagina2'])->middleware(['auth'])->name('saki.filtro2');
Route::post('/sakila/infofiltro2', [ConsultaController::class, 'infoconsult2']);
Route::get('/sakila/subirarchivos', [DescargaController::class, 'createform'])->middleware(['auth'])->name('saki.files');
Route::post('/sakila/descarh', [DescargaController::class, 'download'])->name('saki.archivos');
Route::get('/sakila/descargarchivos', [DescargaController::class, 'directa'])->middleware(['auth'])->name('saki.descargadirecta');
Route::get('/sakila/descarga/{archivo}', [DescargaController::class, 'upload'])->name('saki.ya');




Route::group(['middlware'=>'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'updateduser'])->name('profile.updateduser');
    });
    
    require __DIR__.'/auth.php';
    
