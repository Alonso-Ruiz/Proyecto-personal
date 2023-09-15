<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_venta';

    protected $fillable = [
        'id_categoria',
        'nombre_producto',
        'foto',
        'cantidad',
        'precio',
        'nombre_vendedor',
        'telefono',
        'fecha',
        'direccion',
    ];
}
