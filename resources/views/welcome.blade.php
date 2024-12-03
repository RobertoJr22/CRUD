@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-m-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div class="titulos-container">
    @if($search)
        <h3>Buscando por: <br>{{$search}}</br></h3>
    @else
        <h3>Proximos eventos:</h3>
        <p class="subtitle">Veja os eventos dos proximos dias</p>
    @endif    
</div>

<div class="row" id="eventos-container">
@foreach($Eventos as $Evento)
    <div class="col-md-4 mb-5">
        <div class="card h-100">

            <img src="/img/Eventos/{{ $Evento->image }}" class="card-img-top" alt="{{$Evento->titulo}}"/>

            <div class="card-body">
                <h5 class="card-title">{{$Evento->titulo}}</h5>
                <p class="card-date">{{date('d/m/y', strtotime($Evento->data))}}</p>
                <p class="card-text"></p>
                <a  id="btn" class="btn btn-danger add-to-cart" href="/Eventos/{{$Evento->id}}">Saber Mais</a>
            </div>
        </div>
    </div>
@endforeach
@if( $search && count($Eventos) == 0)
    <p>Não há Eventos disponives contendo os carateres "{{$search}}" <br><a href="/">Ver todos os eventos</a></br></p>
@elseif(count($Eventos) == 0)
    <p>Não há Eventos disponives</p>
@endif
</div> 
<!-- Add more products here -->


@endsection
