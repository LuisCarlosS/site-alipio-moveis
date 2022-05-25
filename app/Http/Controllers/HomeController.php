<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\cliente;

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

    public function loginCliente(){
        $data = [];

        return view("login-cliente", $data);
    }

    public function esqueceuSenha(Request $request){
        $data = [];

        if($request->isMethod("post")){
            $email = $request->input("email", "");
            $newPass = Str::random(10);

            $user = cliente::where("email", $email)->first();
            if(!$user){
                $request->session()->flash("success", "Email inválido");
                return \redirect()->route("esqueceu-senha");
            }

            $user->password = \Hash::make($newPass);
            $user->save();

            $request->session()->flash("error", "Nova senha enviada para o email.");
            return \redirect()->route("login-adm");
        }

        return view("esqueceu-senha", $data);
    }

    public function cadastroCliente(){
        $data = [];

        return view("cadastro-cliente", $data);
    }

    public function logout(){
        Auth::logout();
        return \redirect()->route("home");
    }
}
