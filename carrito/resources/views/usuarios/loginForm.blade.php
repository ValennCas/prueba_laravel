@extends("layouts.app_sin_menu")
@section("contenido")
    <form action="/login" method="post">
        <label for="user_name">Ingrese su usuario:</label>
        <input type="text" name="user_name" id="user_name">
        <label for="user_pass">Ingrese su contraseña:</label>
        <input type="text" name="user_pass" id="user_pass">
    </form>
     @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
</body>
</html>
@endsection