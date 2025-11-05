<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

// routes/web.php
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/crearCuenta', function () {
    return view('crearCuenta');
})->name('crearCuenta');

