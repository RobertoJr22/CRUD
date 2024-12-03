@extends('layouts.main')

@section('title','')

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/Eventos/{{$Evento->image}}" class="img-fluid" alt="{{$Evento->titulo}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$Evento->titulo}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$Evento->cidade}}</p>
            <p class="events-participants"><ion-icon name="calendar" ></ion-icon>{{ $Evento->data}}</p>
            <p class="events-participants"><ion-icon name="people-outline" ></ion-icon>x Participant</p>
            <p class="event-owner"><ion-icon name="star-outline" ></ion-icon>{{$DonoEvento['name']}}</p>        
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            <h3>O evento conta com:</h3>
            <ul id="items-list">
                @foreach($Evento->itens as $item)
                    <li><ion-icon name="play-outline"></ion-icon>{{$item}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{$Evento->descricao}}</p>
        </div>
    </div>
</div>
@endsection