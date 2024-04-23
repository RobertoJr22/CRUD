<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Billy'; 
    $arr = [1,2,3,4];
    return view('welcome',
    [
        'nome' => $nome,
        'arr' => $arr,
    ]);
});

Route::get('/Produto', function () {
    return view('Produtos');
});

Route::get('/Contactos', function () {
    return view('Contactos');
});

