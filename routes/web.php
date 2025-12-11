<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\CotizarController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/cotizar', function () {
    return view('cotizar');
})->name('cotizar');

Route::get('/panelProductos', function () {
    return view('panelProductos');
})->name('panelProductos');

Route::get('/panelCotizaciones', function () {
    return view('panelCotizaciones');
})->name('panelCotizaciones');

Route::get('/panelReportes', function () {
    return view('panelReportes');
})->name('panelReportes');

// routes/web.php
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/cotizar', [CotizarController::class, 'index'])->name('cotizar');

// Ruta para PROCESAR el formulario (POST) <--- ¡ESTA ES LA QUE TE FALTA!
Route::post('/cotizar', [CotizarController::class, 'calcular'])->name('cotizar.calcular');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

