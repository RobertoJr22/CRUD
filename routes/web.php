<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\EventoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TesteController;

Route::get('/',[EventoController::class, 'index'] );
Route::get('/Eventos/Criar',[EventoController::class, 'Criar'])->middleware('auth');
Route::get('/Eventos/Atualizar',[EventoController::class,'Atualizar']);
Route::get('/Eventos/Apagar',[EventoController::class,'Apagar']);
Route::post('/Eventos',[EventoController::class,'store']);
route::delete('/Eventos/{id}',[EventoController::class,'destroy']);
route::get('Eventos/{id}',[EventoController::class,'show']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
