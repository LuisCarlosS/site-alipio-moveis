<?php

namespace App\Models;

class tipo_produto extends BaseModel
{
    protected $table = "tipo_produtos";
    protected $fillable = ['tipo'];

    public function beforeSave(){
        
    }

    protected $messages = [
        'tipo.required' => 'Campo vazio.',
        'tipo.unique' => 'Este tipo de produto já está cadastrado.'
    ];

    public function rules(){
        return [
            'tipo' => 'required|unique:tipo_produtos',
        ];
    }
}
