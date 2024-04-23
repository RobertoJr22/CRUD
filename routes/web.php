<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\EventoController;

Route::get('/',[EventoController::class, 'index'] );
Route::get('/Eventos/Criar',[EventoController::class, 'Criar']);
Route::get('/Eventos/Atualizar',[EventoController::class,'Atualizar']);
Route::get('/Eventos/Apagar',[EventoController::class,'Apagar']);








Route::get('/Produto', function () {
    $busca = request('search');

    return view('Produtos',['busca' => $busca]);
});

Route::get('/Contactos/{id?}', function ($id = null) {
    return view('Contactos',['id' => $id]);
});

