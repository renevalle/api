<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
//data que se envia a la base de datos o que muestra
    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'sexo',
        'dni',
        'tipo_sangre',
        'telefono',
        'correo',
        'direccion'
    ];
//sirve para ocultar y no mandar esta data a la base
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
