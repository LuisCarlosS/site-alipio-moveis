<?php

namespace App\Models;

class favorito extends BaseModel
{
    protected $table = "favoritos";
    protected $fillable = ['produto_id', 'cliente_id'];

    public function beforeSave(){
        
    }
}
