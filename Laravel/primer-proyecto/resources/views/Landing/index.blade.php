@extends('loyout.app')

@section('content')
    <h1>Inicio</h1>
    <a href="{{ route('Landing.acercade')}}" class="btn btn.info">Acerca de</a> |
    <a href="{{ route('Landing.servicios')}}" class="btn btn.info">Servicios</a> |
    <a href="{{ route('Landing.contacto')}}" class="btn btn.info">Contacto</a>
@endsection
