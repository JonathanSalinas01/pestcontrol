<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/cotizar', function () {
    return view('cotizar');
});