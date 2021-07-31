<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable = [
        'titulo',
        'descricao',
        
    ];
    protected $hidden = [
        'id','created_at', 'updated_at',
    ];
}
