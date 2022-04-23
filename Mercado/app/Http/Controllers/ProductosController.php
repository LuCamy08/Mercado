<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductosController extends Controller
{
    public function mostrarProductos(){
        $productos = DB::table('productos')->get();
        return view('productos.productos')->with('productos',$productos);
    }
}
