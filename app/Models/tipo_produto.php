<?php

namespace App\Models;

class tipo_produto extends BaseModel
{
    protected $table = "tipo_produtos";
    protected $fillable = ['tipo'];

    public function beforeSave(){
        
    }
}
