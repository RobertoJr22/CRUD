<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;

class EventoController extends Controller
{
    public function index () {

        $search = request('search');

        if($search){
            $Eventos = Evento::where([
                ['titulo','like','%'.$search.'%']
            ])->get();
        }else{
            $Eventos = Evento::all();
        }

        return view('welcome',['Eventos'=>$Eventos, 'search'=>$search]);
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

    public function store(Request $request){
        $Evento = new Evento;
        $user = Auth::user();

        $Evento->user_id = $user->id;
        $Evento->titulo = $request->titulo;
        $Evento->data = $request->data;
        $Evento->cidade = $request->cidade;
        $Evento->privado = $request->privado;
        $Evento->descricao = $request->descricao;
        $Evento->itens = $request->itens;
        

        //Upload de imagem

        if($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/Eventos'), $imageName);

            $Evento->image = $imageName;
        }



        $Evento->save();

        return redirect('/')->with('msg','Evento criado com sucesso');
    }

    public function show($id){

        $Evento = Evento::findOrFail($id);
        $donoEvento = User::where('id','=',$Evento->user_id)->first()->toArray(); 

        return view('Eventos.show',['Evento' => $Evento, 'DonoEvento' => $donoEvento]);
    }

    public function destroy($id){

        Evento::findOrFail($id)->delete();  

        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso');
    }
}
