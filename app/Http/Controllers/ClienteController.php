<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Auth;

class ClienteController extends Controller
{
    public function loginCliente(){
        $data = [];

        return view("cliente/home", $data);
    }

    public function cadastroCliente(){
        $data = [];

        return view("cliente.cadastro-cliente", $data);
    }

    public function salvarCliente(Request $request){
        try{
            $senha = $request->input("senha");
            $csenha = $request->input("csenha");

            if($senha == "" || $senha != $csenha){
                $request->session()->flash("error", "Senhas não podem ser vazias e nem diferentes.");
                return redirect()->route("cliente.cadastro-cliente");
            }

            $cliente = new usuario;
            $cliente->email = $request->input("email");
            $cliente->senha = \Hash::make($senha);
            $cliente->nome_completo = $request->input("nome_completo");
            $cliente->cpf = $request->input("cpf");
            $cliente->celular = $request->input("celular");
            $cliente->cidade = $request->input("cidade");
            $cliente->bairro_povoado = $request->input("bairro_povoado");
            $cliente->perfil = "CLIENTE";

            if(!$cliente->save()){
                return back()->withErrors($cliente->getErrors());
            }
            $request->session()->flash("success", "Cliente cadastrado com sucesso.");
        }catch(\Exception $e){
            \Log::error("Save Usuario", [ $e->getMessage()]);
            $request->session()->flash("error", "Cliente não cadastrado.");
        }


        return redirect()->route("cliente.cadastro-cliente");
    }

    public function esqueceuSenha(Request $request){
        $data = [];

        if($request->isMethod("post")){
            $email = $request->input("email", "");
            $newPass = Str::random(10);

            $user = usuario::where("email", $email)->first();
            if(!$user){
                $request->session()->flash("success", "Email inválido");
                return \redirect()->route("esqueceu-senha");
            }

            $user->password = \Hash::make($newPass);
            
            if($user->save()){
                $request->session()->flash("error", "Não pôde gerar uma senha para o usuário.");
                return \redirect()->route("cliente.esqueceu-senha");
            }

            \Mail::send('email.forget-password', ['email' => $email, 'nome' => $user->nome, 'senha' => $newPass],
            function($message) use($email){
                $message->from("contato@alipiomoveis.com.br");
                $message->to($email);
                $message->subject("Reset de senha");
            });

            $request->session()->flash("success", "Nova senha enviada para o email.");
            return \redirect()->route("cliente.login-cliente");
        }

        return view("esqueceu-senha", $data);
    }

    public function logout(){
        Auth::logout();
        return \redirect()->route("home");
    }

}