
  <!--   @if (count($errors) > 0)
        @foreach ($errors->all() as "error)
            {{ $error }}
        @endforeach
    @endif-->
    <!--Pide informacion de quien envia los datos para saber si laravel le da permisos de solicitud o no-->
    <!--Valor encriptado para que recepcione laravel y lo procesa el servidor-->
    <label for="nombre">Ingrese su nombre</label>
    @if (isset($producto))
        <input type="text" name="nombre" value="{{ isset($producto) ? $producto->nombre : old('nombre') }}"
            id="nombre" required>
        <label for="precio">Ingrese un numero</label>
        <input type="number" name="precio" value="{{ isset($producto) ? $producto->precio : old('precio') }}"
            id="precio" required>
    @else
        <input type="text" name="nombre" value="" id="nombre" required>
        <label for="precio">Ingrese un numero</label>
        <input type="number" name="precio" value="" id="precio" required>
    @endif
    <button type="submit" value="Guardar datos">sumar</button>
    <a href="/productos">Regresar</a>

