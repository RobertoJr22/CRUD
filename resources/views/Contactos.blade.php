@extends('layouts.main')

@section('title','Contactos')

@section('content')

<H1>Contactos</H1>

@if($id != null)
<p>Exibindo o id passado como parametro: {{$id}}</p>
@else
<p>Nao se passou nenhum numero parametro</p>
@endif
@endsection