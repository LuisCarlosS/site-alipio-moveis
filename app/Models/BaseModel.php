<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $rules = [];
    protected $messages = [];

    protected $errors;

    public function validate():bool{
        $validator = \Validator::make($this->attributes, $this->rules(), $this->messages);
        if($validator->fails()){
            $this->errors = $validator->errors();
            return false;
        }
        return true;
    }

    public function rules(){
        return $this->rules;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    public abstract function beforeSave();

    public function save(array $options = []){
        try{
            if((!isset($options["ignoreValidate"]) || !$options["ignoreValidate"]) && !$this->validate()){
                return false;
            }
            $this->beforeSave();

            return parent::save($options);
        }catch(\Exception $e){
            \Log::error("ERRO TO SAVE", [ $e->getMessage()]);
            return false;
        }
    }
}