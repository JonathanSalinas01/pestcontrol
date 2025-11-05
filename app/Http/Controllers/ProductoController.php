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
}
