<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetalleVenta;
use App\Models\Venta;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class RVentaController extends Controller
{
    public function showRVenta()
    {
        $categorias = Categoria::all();

        return view('RVenta', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'foto' => 'required|image|max:2048',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
            'nombre_vendedor' => 'required',
            'telefono' => 'required',
            'fecha' => 'required|date',
            'direccion' => 'required',
            'id_categoria' => 'required',
        ]);
    
        $detalleVenta = new DetalleVenta();
        $detalleVenta->nombre_producto = $request->nombre_producto;
        $detalleVenta->id_categoria = $request->id_categoria;
        $detalleVenta->cantidad = $request->cantidad;
        $detalleVenta->precio = $request->precio;
        $detalleVenta->nombre_vendedor = $request->nombre_vendedor;
        $detalleVenta->telefono = $request->telefono;
        $detalleVenta->fecha = $request->fecha;
        $detalleVenta->direccion = $request->direccion;
    
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
    
            // Guardar la ruta de la imagen en la base de datos sin el prefijo "storage/"
            $detalleVenta->foto = 'images/' . $filename;
        }
        $detalleVenta->save();
    
        $detallesVenta = DetalleVenta::all();
        
        $venta = Venta::create([
            'nombre_producto' => $request->input('nombre_producto'),
            'nombre_vendedor' => $request->input('nombre_vendedor'),
            'fecha' => $request->input('fecha'),
        ]);
        $articulo = Articulo::create([
            'id_categoria' => $request->input('id_categoria'),
            'nombre_producto' => $request->input('nombre_producto'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
    
        return redirect()->route('index')->with('success', 'Venta publicada exitosamente');
    }
}