<?php

use App\Http\Controllers\productoController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\sumaController;
use Illuminate\Support\Facades\Route;
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

/*Version vieja sin MVC (mal, solo practica)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get("/suma", function () {
    return view("suma");
});
*/
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
