@extends('layouts.app')

@section('contenido')
<h1>Hacer una suma</h1>
<!--action envia a la url que se especifica-->
<form action="/suma" method="POST">
    @csrf
    <!--Pide informacion de quien envia los datos para saber si laravel le da permisos de solicitud o no-->
    <!--Valor encriptado para que recepcione laravel y lo procesa el servidor-->
    <label for="numero_1">Ingrese un numero</label>
    <input type="number" name="numero_1" id="numero_1" required>
    <label for="numero_2">Ingrese un numero</label>
    <input type="number" name="numero_2" id="numero_2" required>
    <button type="submit">sumar</button>
</form>
@if (isset($resultado))
    <p>El resultado es {{ $resultado }}</p>
@endif

@endsection
