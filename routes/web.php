<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('index');
});

// Otras vistas
Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/conocemas', function () {
    return view('conocemas');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/equipomedico', function () {
    return view('equipomedico');
});

Route::get('/especialidades', function () {
    return view('especialidades');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/inicio2', function () {
    return view('inicio2');
});

Route::get('/verificacion', function () {
    return view('verificacion');
});
Route::get('/listadocontacto', function () {
    return view('listadocontacto');
});


