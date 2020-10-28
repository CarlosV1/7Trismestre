@extends('loyout.app')

@section('content')
    <h1>Contacto</h1>
    <a href="{{ route('Landing.acercade')}}" class="btn btn.info">Acerca de</a> |
    <a href="{{ route('Landing.servicios')}}" class="btn btn.info">Servicios</a> |
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a>
@endsection
