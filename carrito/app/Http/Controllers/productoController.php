<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function __construct(){
        $this->middleware("auth:usuarios");
    }


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
        $producto->save();
        return $this->mostrarProductos();
    }

    public function mostrarFormularioCargar()
    {
        return view("productos.nuevoProducto");
    }

    public function delete($id)
    {
        producto::destroy($id);
        return redirect('productos');
    }

    public function mostrarFormularioEditar($id)
    {
        $producto = producto::find($id);

        return view("productos.editarDatos", compact('producto'));
    }

    public function updateProducto($id, Request $request){
       $producto = producto::findOrFail($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect('productos');
    }

}
