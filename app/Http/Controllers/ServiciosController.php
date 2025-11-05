<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        // 2. Obtiene todos los servicios de la base de datos
        $servicios = Servicios::all();

        // 3. Retorna la vista 'servicios.blade.php' y le pasa la variable $servicios
        return view('servicios', [
            'servicios' => $servicios
        ]);
    }
}
