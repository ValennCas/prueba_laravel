@extends('layouts.app')

@section('contenido')

<form action="/productos/{{ $producto->id }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('productos.form')
</form>

@endsection
