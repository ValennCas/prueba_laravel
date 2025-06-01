@extends('layouts.app')

@section('contenido')
<a href="/productos/create">Agregar nuevo producto</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <th>{{ $producto->id }}</th>
                <th>{{ $producto->nombre }}</th>
                <th>{{ $producto->precio }}</th>
                <th>
                    <a href="/productos/{$producto->id}/edit">Editar</a>
                </th>
                <th>
                    <form action="/productos/{$producto->id}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                </th>
            </tr>
        @endforeach

    </tbody>
</table>

<p>productos</p>

@endsection
