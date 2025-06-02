<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

class LoginController extends Controller{
    
   
    public function loginForm(){
        return view("loginForm");
    }

    public function login(Request $request){
       $datos= $request->only("user_name", "user_pass");
       $usuario= \App\Models\Usuarios::where("user_name", $datos["user_name"])->first();

       if($usuario && Hash::check($datos["user_pass"], $usuario->user_pass)){
            Auth::guard("usuarios")->login($user);
            return redirect()->intended("/inicio");
        }
        return back()->withErrors([
            "user_name"=> "Las credenciales son incorrectas.",
        ]);
    }

    public function logout(Request $request){
        Auth::guard("usuarios")->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }
}
