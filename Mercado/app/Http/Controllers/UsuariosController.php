<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use DB;

class UsuariosController extends Controller
{
    public function registrarUsuario(Request $request){
        $user = new Usuario();
        $user->nombre = $request->nombre;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->correo = $request->correo;
        $user->imagen = $request->imagen;
        $user->rol = 'Cliente';
        $user->activo = '1';
        $user->password = $request->clave;
        $fecha=date('y/m/d');
        $user->fecha=$fecha;
        $user->save();
    }
    public function viewRegistroUsuario(){
        return view('usuario.registro');
    }

    public function PrincipalCliente(){
        return view('usuario.cliente');
    }

    public function PrincipalSupervisor(){
        return view('usuario.supervisor');
    }

    public function PrincipalEncargado(){
        return view('usuario.encargado');
    }

    public function Comprador(){
        return view('usuario.comprador');
    }

    public function HistorialVendedor($id){
        $usuario = productos::join('usuarios', 'productos.id', '=', 'usuarios.id')
        ->where('productos.usuarios_id', '=', $id)
        -count();

        $producto = usuarios::join('productos', 'usuarios.id', '=', 'productos.id')
        ->select('usuarios.nombre', 'usuarios.apellidopaterno', 'usuarios.apellido_materno', 'usuarios.fecha')
        ->where('usuarios.id', '=', $id)
        ->get();

        $productoconsig = productos::join('usuarios', 'productos.id', '=', 'usuarios.id')
        ->where(['productos.usuarios_id', '=', $id], ['usuarios.id', '=', $id], ['productos.consesionado', '=',1])
        ->count();

        echo $usuario;
        //return view('usuario.historialsupervisor', compact('usuario','producto','productoconsig'));
    }
}