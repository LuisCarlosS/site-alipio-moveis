<?php

namespace App\Http\Controllers;

use App\Models\tipo_produto;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
        $data = [];

        $querytipo = new tipo_produto();
        $querytipo = $querytipo->orderBy("tipo_produtos.tipo");
        $data["listaTipos"] = $querytipo->get(['id','tipo']);

        return view("home", $data);
    }
    
    public function login(){
        $data = [];

        return view("login", $data);
    }

    public function carregarLogin(Request $request){
        $data = [];
        
        if($request->isMethod("POST")){
            $email = $request->input("email");
            $senha = $request->input("senha");

            if(Auth::attempt(['email' => $email, 'password' => $senha, 'perfil' => 'ADMIN'])){
                return \redirect()->route("admin.home");
            }
            else if(Auth::attempt(['email' => $email, 'password' => $senha, 'perfil' => 'CLIENTE'])){
                return \redirect()->route("cliente.home");
            }else{
                $request->session()->flash("error", "E-mail / Senha inválidos");
                return \redirect()->route("login");
            }
        }

        return view("login", $data);
    }

    public function logout(){
        Auth::logout();
        return \redirect()->route("home");
    }
}
