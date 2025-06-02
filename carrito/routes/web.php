<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\sumaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Http\Request;

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

Route::get("/", [inicioController::class, "inicio"]);
Route::get("/suma", [sumaController::class, "sumaVista"]);
Route::post("/suma", [sumaController::class, "suma"]);

Route::get("/productos", [productoController::class, "mostrarProductos"]);
Route::get("/productos/create", [productoController::class, "motrarFormularioNuevoProducto"]);
Route::post("/productos", [productoController::class, "cargarProductos"]);
Route::get("/nuevoProducto", [productoController::class, "mostrarFormularioCargar"]);
Route::delete("/productos/{id}", [productoController::class, "delete"]);
Route::get("/productos/{id}/edit", [productoController::class, "mostrarFormularioEditar"]);
Route::patch("/productos/{id}", [productoController::class, "updateProducto"]);



