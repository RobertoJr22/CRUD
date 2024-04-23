<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index () {

        $nome = 'Billy'; 
        $arr = [1,2,3,4];
        return view('welcome',
        [
            'nome' => $nome,
            'arr' => $arr,
        ]);
    }

    public function Criar(){

        return view('Eventos.Criar');
    }

    public function Atualizar(){

        return view('Eventos.Atualizar');
    }

    public function Apagar(){
        return view('Eventos.Apagar');
    }
}
