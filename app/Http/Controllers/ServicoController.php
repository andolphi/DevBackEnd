<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validaForm(Request $request, $id = null){
        
        $regras = [
            'titulo' => ['required', 'string','unique:servicos,titulo,'.$id, 'max:100'],
            'descricao' => ['required','string','max:300'],
        ];

        $request->validate($regras);
        $data = $request->except('_token');
        return $data;
    }

    public function index()
    {
        //
        $servicos = Servico::orderBy('id')->get();
        
        return view('admin.servicos',compact('servicos'));
    }

    public function edit($id)
    {
        //
        $servico = Servico::find($id);
        return view('admin.formEdtServico',compact('servico'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $data = $this->validaForm($request,$id);
        unset($data['alterar']);
        
        $edt = Servico::where('id',$id)->update($data);
        if($edt){
            return redirect()->route('admin.servicos')->with('alerta','Servico alterado(a) com sucesso')->with('tipoalerta','success');
        }
    }
}
