<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model {

    use HasFactory;

    protected $fillable = [
        'id',
        'propietario_id',
        'conductor_id',
        'placa',
        'color',
        'marca',
        'tipo',
    ];

}
