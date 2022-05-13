<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        $data = [];

        return view("home", $data);
    }

    public function loginCliente(){
        $data = [];

        return view("login-cliente", $data);
    }

    public function loginAdm(){
        $data = [];

        return view("login-adm", $data);
    }

    public function esqueceuSenha(){
        $data = [];

        return view("esqueceu-senha", $data);
    }

    public function cadastroCliente(){
        $data = [];

        return view("cadastro-cliente", $data);
    }
}
