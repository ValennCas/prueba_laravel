<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function mostrarProductos()
    {
        $productos = producto::all();
        //All devuelve todos los productos
        return view("productos.producto", compact("productos"));
       
        //compact, nombre de variable se convierte en clave y valor de la variable en valor de la clave
        //es un arreglo asociativo
        //response()->json($productos) lo convierte a JSON (Se usa mas para API o para ir de back al front)
    }
    public function motrarFormularioNuevoProducto()
    {
        return view("productos.nuevoProducto");
    }
    public function cargarProductos(Request $request)
    {
        $campos = [
            'nombre' => 'required|string',
            'precio' => 'required|integer'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
        $this->validate($request, $campos, $mensaje);
        $producto = new producto();
        $producto->nombre = $request->input("nombre");
        $producto->precio = $request->input("precio");
        producto::insertar($producto);
    }

    public function mostrarFormularioCargar()
    {
        return view("productos.nuevoProducto");
    }

    public function delete($id)
    {
        producto::destroy($id);
        return redirect('productos.producto');
    }

    public function mostrarFormularioEditar($id)
    {
        $producto = producto::find($id);

        return view("productos.editarDatos", compact('producto'));
    }

    public function updateProducto(Request $request, $id)
    {
        $campos = [
            'nombre' => 'required|string',
            'precio' => 'required|integer'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
        $this->validate($request, $campos, $mensaje);

        $producto = request()->except('_token', '_method');
        producto::actualizar($producto, $id);
        return $this->mostrarFormularioEditar($id);
    }
}
