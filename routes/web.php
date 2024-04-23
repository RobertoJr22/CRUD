<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\EventoController;

Route::get('/',[EventoController::class, 'index'] );








Route::get('/Produto', function () {
    $busca = request('search');

    return view('Produtos',['busca' => $busca]);
});

Route::get('/Contactos/{id?}', function ($id = null) {
    return view('Contactos',['id' => $id]);
});

