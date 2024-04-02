<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\departamentocontroler;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\paiscontroller;
use Illuminate\Support\Facades\Route;

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
Route ::get('/comunas',[ComunaController::class,'index'])->name('comunas.index');
Route ::post('/comunas',[ComunaController::class,'store'])->name('comunas.store');
Route ::get('/comunas/create',[ComunaController::class,'create'])->name('comunas.create');
Route ::delete('/comunas/{comuna}',[ComunaController::class,'destroy'])->name('comunas.destroy');
Route ::put('/comunas/{comuna}',[ComunaController::class,'update'])->name('comunas.update');
Route ::get('/comunas/{comuna}/edit',[ComunaController::class,'edit'])->name('comunas.edit');

//rutas municipios
Route ::get('/municipios',[MunicipioController::class,'index'])->name('municipios.index');
Route ::post('/municipios',[MunicipioController::class,'store'])->name('municipios.store');
Route ::get('/municipios/create',[MunicipioController::class,'create'])->name('municipios.create');
Route ::put('/municipios/{municipio}',[MunicipioController::class,'update'])->name('municipios.update');
Route ::get('/municipios/{municipio}/edit',[MunicipioController::class,'edit'])->name('municipios.edit');
Route ::delete('/municipios/{municipio}',[MunicipioController::class,'destroy'])->name('municipios.destroy');


//rutas departamento 
Route ::get('/departamentos',[departamentocontroler::class,'index'])->name('departamentos.index');
Route ::post('/departamentos',[departamentocontroler::class,'store'])->name('departamentos.store');
Route ::get('/departamentos/create',[departamentocontroler::class,'create'])->name('departamentos.create');
Route ::put('/departamentos/{departamento}',[departamentocontroler::class,'update'])->name('departamentos.update');
Route ::get('/departamentos/{departamento}/edit',[departamentocontroler::class,'edit'])->name('departamentos.edit');
Route ::delete('/departamentos/{departamento}',[departamentocontroler::class,'destroy'])->name('departamentos.destroy');

//rutas pais
Route ::get('/paises',[paiscontroller::class,'index'])->name('paises.index');
Route ::post('/paises',[paiscontroller::class,'store'])->name('paises.store');
Route ::get('/paises/create',[paiscontroller::class,'create'])->name('paises.create');
Route ::put('/paises/{pais}',[paiscontroller::class,'update'])->name('paises.update');
Route ::get('/paises/{pais}/edit',[paiscontroller::class,'edit'])->name('paises.edit');
Route ::delete('/paises/{pais}',[paiscontroller::class,'destroy'])->name('paises.destroy');

