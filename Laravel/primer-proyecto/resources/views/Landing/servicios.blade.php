@extends('loyout.app')

@section('content')
    <h1>Servicios</h1>
    <a href="{{ route('Landing.acercade')}}" class="btn btn.info">Acerca de</a> |
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a> |
    <a href="{{ route('Landing.contacto')}}" class="btn btn.info">Contacto</a>
@endsection