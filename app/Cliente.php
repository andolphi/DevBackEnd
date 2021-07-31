<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    function vendedor(){
        return $this->belongsTo('App\Vendedor','vendedor_id','id');
    }
    protected $fillable = [
        'name',
        'vendedor_id',
        
    ];
}
