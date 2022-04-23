<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;

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
    return view('bienvenida');
});

Route::get('/login', function(){
    return view('login');
});

/*Route::get('/categoria/principal', function () {
    return view('categoria.principal');
});*/

Route::get('/categoria/principal', [CategoriasController::class,'mostrarCategorias']);

Route::get('/productos',[ProductosController::class, 'mostrarProductos']);
route::get('/productosregistrar',[ProductosController::class,'viewRegistro']);
route::post('/productos',[ProductosController::class,'registrarProductos'])->name('productos.registrarProductos');