@extends('loyout.app')

@section('content')
    <h1>Acerca de</h1>
    <a href="{{ route('Landing.index')}}" class="btn btn.info">Inicio</a> |
    <a href="{{ route('Landing.servicios')}}" class="btn btn.info">Servicios</a> |
    <a href="{{ route('Landing.contacto')}}" class="btn btn.info">Contacto</a>
@endsection
