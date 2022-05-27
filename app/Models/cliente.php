<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class cliente extends BaseModel implements Authenticatable
{
    protected $table = "clientes";
    protected $fillable = ['email', 'senha', 'nome_completo', 'cpf', 'celular', 'cidade', 'bairro_povoado'];

   
    protected $messages = [
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.unique' => 'O e-mail já é cadastrado no sistema.',
        'email.email' => 'Preencha um e-mail válido.',
        'senha.required' => 'O campo senha é obrigatório.',
        'nome_completo.required' => 'O campo nome é obrigatório.',
        'cpf.unique' => 'O cpf já é cadastrado no sistema.',
        'cidade.required' => 'O campo cidade é obrigatório.',
        'bairro_povoado.required' => 'O campo bairro ou povoado é obrigatório.'
    ];

    public function rules(){
        return [
            'email' => 'required|unique:clientes,email, ' . $this->id . '|email',
            'senha' => 'required',
            'nome_completo' => 'required',
            'cpf' => 'unique:clientes',
            'cidade' => 'required',
            'bairro_povoado' => 'required'
        ];
    }

    public function beforeSave(){
        
    }

    public function getAuthIdentifierName(){
        return "id";
    }

    
    public function getAuthIdentifier(){
        return $this->id;
    }

    
    public function getAuthPassword(){
        return $this->senha;
    }

    
    public function getRememberToken(){

    }

    
    public function setRememberToken($value){

    }

    
    public function getRememberTokenName(){

    }
}
