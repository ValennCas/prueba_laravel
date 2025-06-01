@extends('layouts.app')

@include('content')

<form action="/productos/{$producto->id}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('productos.form')
</form>
