@extends('layouts.app')

@section('contenido')

<!--enctype multipart/form-data sirve para que se pueda mandar imagenes/archivos por el form-->
<form action="/productos" method="POST">
    @csrf
     @include('productos.form')
    
</form>


@endsection
