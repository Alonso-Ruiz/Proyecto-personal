<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleVenta;

class DetalleVentaController extends Controller
{
    public function show($id)
    {
        $detalle = DetalleVenta::find($id); // Obtener los detalles de venta por el ID

        return view('detalleventa.show', compact('detalle'));
    }
}
