<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicios;
use App\Models\Plagas;
use Illuminate\Http\Request;

class CotizarController extends Controller
{
    public function index()
    {
        // 1. Pedimos prestada la lista de servicios a la base de datos
        $servicios = Servicios::all();
        $plagas = Plagas::all();

        // 2. Retornamos la vista 'cotizar' ENVIÁNDOLE los servicios
        return view('cotizar', [
            'servicios' => $servicios,
            'plagas' => $plagas
        ]);
    }

  public function calcular(Request $request)
    {

        // 1. Validaciones
        $request->validate([
            'tamaño'  => 'required|numeric',
            'espacio' => 'required',     // Esto trae el ID del servicio (ej: 1, 2, 5)
            'plagas'  => 'required|array'
        ]);

        // ---------------------------------------------------------
        // NUEVA LÓGICA: Obtener precio de la BD
        // ---------------------------------------------------------
        
        // Buscamos el servicio en la BD usando el ID que llegó del formulario
        $servicioEncontrado = Servicios::find($request->input('espacio'));

        // Obtenemos el valor de la columna 'tarifa_base' (Asegúrate que se llame así en tu BD)
        // Si tu columna se llama 'precio', 'costo', etc., cambia 'tarifa_base' por ese nombre.
        $precioBase = $servicioEncontrado->tarifa_base; 

        // ---------------------------------------------------------

        // Valores fijos adicionales (estos también podrían venir de BD si quisieras)
        $precioPorMetro = 100; 
        $precioPorPlaga = 2000; 

        // 3. Hacemos el cálculo matemático
        $metros = $request->input('tamaño');
        $cantidadPlagas = count($request->input('plagas')); 
        
        // Fórmula
        $total = $precioBase + ($metros * $precioPorMetro) + ($cantidadPlagas * $precioPorPlaga);

        // 4. Retornamos
        return back()->with('precio_calculado', $total);
    }
}
