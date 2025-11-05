<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:clientes,email',
            'usuario' => 'required|string|unique:clientes,usuario',
            'password' => 'required|string|min:6',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20'
        ]);

        Clientes::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password),
            'direccion' => $request->direccion,
            'telefono' => $request->telefono
        ]);

        return redirect()->back()->with('success', 'Cuenta creada correctamente ✅');
    }

    // Iniciar sesión
    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);

        // Buscar cliente por usuario
        $cliente = Clientes::where('usuario', $request->usuario)->first();

        if (!$cliente) {
            return response()->json([
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        // Verificar contraseña
        if (!Hash::check($request->password, $cliente->password)) {
            return response()->json([
                'message' => 'Contraseña incorrecta'
            ], 400);
        }

        // Guardar sesión
        Session::put('cliente', [
            'id' => $cliente->id_cliente,
            'usuario' => $cliente->usuario,
            'nombre' => $cliente->nombre,
            'email' => $cliente->email
        ]);

        return response()->json([
            'message' => 'Inicio de sesión exitoso',
            'cliente' => Session::get('cliente')
        ]);
    }

    // Cerrar sesión
    public function logout()
    {
        Session::forget('cliente');

        return response()->json([
            'message' => 'Sesión cerrada correctamente'
        ]);
    }
}
