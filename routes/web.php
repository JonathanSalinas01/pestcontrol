<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\CotizarController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\ContactoController;

// --- VISTAS ESTÁTICAS (Sin lógica compleja) ---
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/panelReportes', function () {
    return view('panelReportes');
})->name('panelReportes');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- RUTAS CON CONTROLADORES (Lógica de negocio) ---

// 1. Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

// 2. Servicios
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

// 3. Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

// 4. Cotizar (ESTA ES LA IMPORTANTE)
Route::get('/cotizar', [CotizarController::class, 'index'])->name('cotizar');
Route::post('/cotizar', [CotizarController::class, 'calcular'])->name('cotizar.calcular');
Route::post('/cotizar/guardar', [CotizacionController::class, 'store'])->name('cotizar.guardar');

// 5. Paneles de Administración
Route::get('/panelProductos', function () {
    return view('panelProductos'); // Si esta vista necesita datos, deberías crear un controlador
})->name('panelProductos');

Route::get('/panelCotizaciones', [CotizacionController::class, 'index'])->name('panelCotizaciones');

Route::patch('/cotizaciones/{id}/estado', [CotizacionController::class, 'updateStatus'])
    ->name('cotizaciones.updateStatus');

// 6. Actualizar Stock
Route::get('/panelActualizarStock', [ProductoController::class, 'verPanelStock'])->name('panelActualizarStock');
Route::patch('/productos/{id}/stock', [ProductoController::class, 'actualizarStock'])->name('productos.actualizarStock');


// --- RUTAS DE AUTENTICACIÓN ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';