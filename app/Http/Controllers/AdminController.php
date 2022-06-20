<?php

namespace App\Http\Controllers;

use App\Models\tipo_produto;
use App\Models\produto;

class AdminController extends Controller
{
    public function indexAdmin($id = 0){
        $data = [];

        $p = new produto();

        if($id != 0){
            $p = produto::find($id);
        }
        $queryProduto = produto::join("tipo_produtos", "produtos.tipo_produto_id", "=", "tipo_produtos.id");

        $data["produtos"] = $p;
        $querytipo = new tipo_produto();
        $querytipo = $querytipo->orderBy("tipo_produtos.tipo");
        $data["listaTipos"] = $querytipo->get(['id','tipo']);
        $data["listaProdutos"] = $queryProduto->get(['nome', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6', 'codigo', 'descricao', 'marca', 'status', 'dt_postagem', 'produtos.id as idproduto']);
        

        return view("admin/home", $data);
    }

}