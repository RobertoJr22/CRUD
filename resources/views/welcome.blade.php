@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
        <h1>Pagina inicial</h1>
        @if(10 > 2)
            <p> {{$nome}}</p>
        @endif
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p> 
        @endfor
        {{-- Parte php --}}
        @php
            echo $nome;
        @endphp
@endsection
