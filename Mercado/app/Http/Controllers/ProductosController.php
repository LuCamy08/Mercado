<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function mostrarProductos(){
        $productos = DB::table('productos')->get();
        return view('productos.productos')->with('productos',$productos);
    }
    
    public function registrarProductos(Request $request){
        $product = new Producto();
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->imagen = $request->imagen;
        $product->concesionado =$request->concesionado;
        $product->motivo = $request->motivo;
        $product->existencia = $request->existencia;
        $product->pendientes = $request->pendientes;
        $product->porcentajeManejo = $request->porcentajeManejo;
        $product->save();
    }
    public function viewRegistro(){
        return view('productos.registroproducto');
    }
}
