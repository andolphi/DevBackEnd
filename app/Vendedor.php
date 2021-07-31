<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    
    protected $table = "vendedores";

    function cliente(){
        return $this->hasMany('App\Cliente','vendedor_id','id')->orderBy('name','asc');
    }

    protected $fillable = [
        'name',
    ];
}
