<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriasController extends Controller
{
    public function mostrarCategorias(){
        $categorias = DB::table('categorias')->get();
        return view('categoria.principal')->with('categorias',$categorias);
    }
}
