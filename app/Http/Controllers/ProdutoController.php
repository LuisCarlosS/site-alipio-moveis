<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_produto;
use App\Models\produto;

class ProdutoController extends Controller
{
    public function salvarTipo_produto(Request $request){
        try{
            $tipo_produto = new tipo_produto;
            $tipo_produto->tipo = $request->input("tipo");

            if(!$tipo_produto->save()){
                return back()->withErrors($tipo_produto->getErrors());
            }
            $request->session()->flash("success", "Tipo de produto cadastrado com sucesso.");
        }catch(\Exception $e){
            \Log::error("Save Tipo produto", [ $e->getMessage()]);
            $request->session()->flash("error", "Tipo de produto não cadastrado.");
        }

        return redirect()->route("admin.home");
    }

    public function salvarProduto(Request $request){
        try{
            $produto = new produto;
            $produto->nome = $request->input("nome");
            $produto->foto1 = $request->file("foto1") ? $request->file("foto1")->getClientOriginalName() : null;
            $produto->foto2 = $request->file("foto2") ? $request->file("foto2")->getClientOriginalName() : null;
            $produto->foto3 = $request->file("foto3") ? $request->file("foto3")->getClientOriginalName() : null;
            $produto->foto4 = $request->file("foto4") ? $request->file("foto4")->getClientOriginalName() : null;
            $produto->foto5 = $request->file("foto5") ? $request->file("foto5")->getClientOriginalName() : null;
            $produto->foto6 = $request->file("foto6") ? $request->file("foto6")->getClientOriginalName() : null;
            $produto->codigo = $request->input("codigo");
            $produto->descricao = $request->input("descricao");
            $produto->marca = $request->input("marca");
            $produto->status = $request->input("status");
            $produto->dt_postagem = $request->input("dt_postagem");
            $produto->tipo_produto_id = $request->input("tipo_produto_id");
            
            if ($request->hasFile('foto1') && $request->foto1->isValid()) {
                $nameFoto = $request->file("foto1")->getClientOriginalName();
                $request->foto1->storeAs('produtos', $nameFoto);
            }
            if ($request->hasFile('foto2') && $request->foto2->isValid()) {
                $nameFoto = $request->file("foto2")->getClientOriginalName();
                $request->foto2->storeAs('produtos', $nameFoto);
            }
            if ($request->hasFile('foto3') && $request->foto3->isValid()) {
                $nameFoto = $request->file("foto3")->getClientOriginalName();
                $request->foto3->storeAs('produtos', $nameFoto);
            }
            if ($request->hasFile('foto4') && $request->foto4->isValid()) {
                $nameFoto = $request->file("foto4")->getClientOriginalName();
                $request->foto4->storeAs('produtos', $nameFoto);
            }
            if ($request->hasFile('foto5') && $request->foto5->isValid()) {
                $nameFoto = $request->file("foto5")->getClientOriginalName();
                $request->foto5->storeAs('produtos', $nameFoto);
            }
            if ($request->hasFile('foto6') && $request->foto6->isValid()) {
                $nameFoto = $request->file("foto6")->getClientOriginalName();
                $request->foto6->storeAs('produtos', $nameFoto);
            }

            
            if(!$produto->save()){
                return back()->withErrors($produto->getErrors());
            }
            $request->session()->flash("success", "Produto cadastrado com sucesso.");
        }catch(\Exception $e){
            \Log::error("Save produto", [ $e->getMessage()]);
            $request->session()->flash("error", "Produto não cadastrado.");
        }
        return redirect()->route("admin.home");
    }

    public function detalhesProduto(){
        $data = [];

        $querytipo = new tipo_produto();
        $querytipo = $querytipo->orderBy("tipo_produtos.tipo");
        $data["listaTipos"] = $querytipo->get(['id','tipo']);

        return view("produto/detalhes", $data);
    }
}