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

    // --- Agrega estas funciones al final de tu clase ProductoController ---

    public function verPanelStock()
    {
        // Traemos todos los productos
        $productos = Productos::all();
        return view('panelActualizarStock', compact('productos'));
    }

    public function actualizarStock(Request $request, $id)
    {
        // 1. Validar que sea un número
        $request->validate([
            'nuevo_stock' => 'required|integer|min:0'
        ]);

        // 2. Buscar producto (Asegurate que tu primary key sea 'id' o ajusta esta linea)
        // Si tu primary key es 'id_producto', usa: findOrFail($id) o where(...)->first()
        $producto = Productos::findOrFail($id);

        // 3. Actualizar
        $producto->stock = $request->input('nuevo_stock');
        $producto->save();

        // 4. Volver atrás con mensaje
        return redirect()->route('panelActualizarStock')->with('success', 'Stock actualizado correctamente.');
    }
}
