<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizacion;
use Carbon\Carbon;

class CotizacionController extends Controller
{
    public function index()
    {
        // Obtiene todas las filas de la tabla 'cotizacion'
        $cotizaciones = Cotizacion::all();

        // Retorna una vista (que crearemos luego) y le pasa los datos
        // Si solo quieres ver los datos en crudo (JSON), cambia la linea por: return $cotizaciones;
        return view('panelCotizaciones', compact('cotizaciones'));
    }

    public function store(Request $request)
    {
        // 1. Validamos que llegue un precio
        $request->validate([
            'precio_estimado' => 'required|numeric'
        ]);

        // 2. Creamos la nueva cotización
        Cotizacion::create([
            'fecha' => Carbon::now()->format('Y-m-d'), // Fecha de hoy
            'estado' => 'PENDIENTE',                   // Estado fijo
            'precio_estimado' => $request->input('precio_estimado')
        ]);

        // 3. Redirigimos a la página de contacto (o donde prefieras)
        // Usamos 'info' para mostrar un mensaje de éxito en la siguiente pantalla
        return redirect()->route('contacto')->with('info', '¡Tu cotización ha sido guardada! Por favor envíanos tus datos para finalizar el agendamiento.');
    }

    public function updateStatus(Request $request, $id)
    {
        // Validamos MAYÚSCULAS exactas
        $request->validate([
            'estado' => 'required|in:PENDIENTE,ACEPTADO,RECHAZADO'
        ]);

        // Buscamos por id_cotizacion
        $cotizacion = Cotizacion::where('id_cotizacion', $id)->firstOrFail();

        // Guardamos
        $cotizacion->estado = $request->input('estado');
        $cotizacion->save();

        return redirect()->route('panelCotizaciones');
    }
}
