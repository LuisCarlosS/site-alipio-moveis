<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class adm extends BaseModel implements Authenticatable
{
    protected $table = "adms";
    protected $fillable = ['usuario','senha'];

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

