<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servico;

class ServicoApiController extends Controller
{
    public function show($id){
        return Servico::find($id);

    }
}
