<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $data = [];

        return view("home", $data);
    }

    public function indexAdm(Request $request){
        $data = [];
        
        if($request->isMethod("POST")){
            $usuario = $request->input("usuario");
            $senha = $request->input("senha");

            if(Auth::attempt(['usuario' => $usuario, 'password' => $senha])){
                return \redirect()->route("admin.home");
            }else{
                $request->session()->flash("error", "Usuário / Senha inválidos");
                return \redirect()->route("login-adm");
            }
        }

        return view("login-adm", $data);
    }

    public function logout(){
        Auth::logout();
        return \redirect()->route("home");
    }
}
