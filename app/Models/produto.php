<?php

namespace App\Models;

class produto extends BaseModel
{
    protected $table = "produtos";
    protected $fillable = ['nome', 'foto', 'codigo', 'descricao', 'marca', 'status', 'dt_postagem', 'tipo_produto_id'];

    public function beforeSave(){
        
    }
}
