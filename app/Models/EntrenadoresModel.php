<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrenadoresModel extends Model
{
    use HasFactory;
    protected $table='entrenador';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'direccion',
        'estado'


    ];
}
