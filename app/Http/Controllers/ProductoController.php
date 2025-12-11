<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;

class ProductoController extends Controller
{
     public function index()
    {
        // 2. Obtiene todos los productos de la base de datos
        $productos = Productos::all();

        // 3. Retorna la vista 'productos.blade.php' y le pasa la variable $productos
        return view('productos', [
            'productos' => $productos
        ]);
    }

    public function store(Request $request)
    {
        // 1. Validar que los datos lleguen bien (opcional pero recomendado)
        $request->validate([
            'nombreProducto' => 'required',
            'precioProducto' => 'required|numeric',
            'stockProducto' => 'required|integer',
            'descripcionProducto' => 'required',
        ]);

        // 2. Crear el nuevo producto
        // Izquierda: Columna en BD | Derecha: Name en el Formulario HTML
        Productos::create([
            'nombre'      => $request->input('nombreProducto'),
            'precio'      => $request->input('precioProducto'),
            'stock'       => $request->input('stockProducto'),
            'descripcion' => $request->input('descripcionProducto'),
            'imagen'      => "https://picsum.photos/id/200/1920/1280" // Lo dejamos null por ahora si no subes foto
        ]);

        // 3. Redireccionar al usuario (recargar la página)
        return redirect()->route('productos')->with('success', 'Producto agregado correctamente');
    }
}
