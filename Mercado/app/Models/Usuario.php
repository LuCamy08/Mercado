<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'imagen',
        'telefono',
        'rol',
        'activo',
        'password',
        'fecha',   
    ];

    public function producto(){
        return $this->hasMany(Producto::class, 'usuario_id','id');
    }

}
