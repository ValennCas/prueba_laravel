<?php

namespace App\Http\Controllers;
#use ..\resources\views;

use Illuminate\Http\Request;

class sumaController extends Controller
{
    /*public function suma()
    {
        $nros = $this->getData();
        if (isset($nros->numero_1)) {
            $num1 = $nros->numero_1;
            $num2 = $nros->numero_2;
            $resultado = $num1 + $num2;
        }
        return view("suma", ["resultado"->$resultado]);

    }*/

    public function suma(Request $request)
    {
        $num1 = $request->input("numero_1");
        $num2 = $request->input("numero_2");
        $resultado = $num1 + $num2;
        return view("suma", ["resultado" => $resultado]);
    }

    public function sumaVista(){
        return view("suma");
    }
}
