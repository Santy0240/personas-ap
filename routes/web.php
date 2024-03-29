<?php

use App\Http\Controllers\ComunaController;
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
