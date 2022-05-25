<?php

namespace App\Models;

class cliente extends BaseModel
{
    protected $table = "clientes";
    protected $fillable = ['email', 'senha', 'nome_completo', 'cpf', 'celular', 'cidade', 'bairro_povoado'];

    public function beforeSave(){
        
    }
}
