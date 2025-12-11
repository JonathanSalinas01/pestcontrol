<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index() {
        return view('contacto'); // O el nombre de tu vista actual
    }

    public function store(Request $request) {
        // 1. Validar los datos
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        // 2. Enviar el correo (cambia el email por el del administrador)
        Mail::to('admin@pestcontrol.com')->send(new ContactoMailable($request->all()));

        // 3. Redireccionar con mensaje de éxito
        return back()->with('info', 'Mensaje enviado correctamente, nos pondremos en contacto pronto.');
    }
}
