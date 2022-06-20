<?php

namespace App\Models;

class produto extends BaseModel
{
    protected $table = "produtos";
    protected $fillable = ['nome', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6', 'codigo', 'descricao', 'marca', 'status', 'dt_postagem', 'tipo_produto_id'];

    public function beforeSave(){
        
    }

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório.',
        'foto1.required' => 'O campo foto 1 é obrigatório.',
        'codigo.required' => 'O campo código é obrigatório.',
        'descricao.required' => 'O campo descrição é obrigatório.',
        'status.required' => 'O campo status é obrigatório.',
        'dt_postagem.required' => 'O campo data da postagem é obrigatório.',
        'tipo_produto_id.required' => 'O campo categoria é obrigatório.'
    ];

    public function rules(){
        return [
            'nome' => 'required',
            'foto1' => 'required|unique:produtos,foto1',
            'codigo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
            'dt_postagem' => 'required',
            'tipo_produto_id' => 'required',
        ];
    }
}
