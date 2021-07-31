<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;
use App\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validaForm(Request $request, $id = null){
        
        $regras = [
            'name' => ['required', 'string','unique:clientes,name,'.$id, 'max:100'],
            
        ];

        $request->validate($regras);
        $data = $request->except('_token');
        return $data;
    }

    public function index()
    {
        //
        $clientes = Cliente::orderBy('name')->get();
        
        return view('admin.clientes',compact('clientes'));
    }

    
    public function create()
    {
        $vendedores = Vendedor::orderBy('name')->get();
        return view('admin.formAddCliente',compact('vendedores'));
    }

    
    public function store(Request $request)
    {
        //
        $data = $this->validaForm($request);
        
        unset($data['cadastrar']);
        $lastId = Cliente::create($data);
        return redirect()->route('admin.clientes')->with('alerta','Cliente cadastrado(a) com sucesso')->with('tipoalerta','success');
    }
    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        $vendedores = Vendedor::orderBy('name')->get();
        $cliente = Cliente::find($id);
        return view('admin.formEdtCliente',compact('cliente','vendedores'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $data = $this->validaForm($request,$id);
        unset($data['alterar']);
        
        $edt = Cliente::where('id',$id)->update($data);
        if($edt){
            return redirect()->route('admin.clientes')->with('alerta','Cliente alterado(a) com sucesso')->with('tipoalerta','success');
        }
    }

    
    public function destroy($id)
    {
        //
        $del = Cliente::where('id',$id)->delete();
        if($del){
            return redirect()->route('admin.clientes')->with('alerta','Cliente Excluido(a) com sucesso')->with('tipoalerta','success');
        }
        
    }
}
