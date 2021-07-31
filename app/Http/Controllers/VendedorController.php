<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;
use App\Cliente;
use Illuminate\Support\Facades\Auth;

class VendedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validaForm(Request $request, $id = null){
        
        $regras = [
            'name' => ['required', 'string','unique:vendedores,name,'.$id, 'max:100'],
            
        ];

        $request->validate($regras);
        $data = $request->except('_token');
        return $data;
    }

    public function index()
    {
        //
        $vendedores = Vendedor::orderBy('name')->get();
        
        return view('admin.vendedores',compact('vendedores'));
    }

    
    public function create()
    {
        //
        return view('admin.formAddVend');
    }

    
    public function store(Request $request)
    {
        //
        $data = $this->validaForm($request);
        
        unset($data['cadastrar']);
        $lastId = Vendedor::create($data);
        return redirect()->route('admin.vendedores')->with('alerta','Vendedor(a) cadastrado(a) com sucesso')->with('tipoalerta','success');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
        $vendedor = Vendedor::find($id);
        return view('admin.formEdtVend',compact('vendedor'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $data = $this->validaForm($request,$id);
        unset($data['alterar']);
        
        $edt = vendedor::where('id',$id)->update($data);
        if($edt){
            return redirect()->route('admin.vendedores')->with('alerta','Vendedor(a) alterado(a) com sucesso')->with('tipoalerta','success');
        }
    }

    
    public function destroy($id)
    {
        //
        $clientes = Cliente::where('vendedor_id',$id)->get();
        if(count($clientes)==0){
            $del = Vendedor::where('id',$id)->delete();
            if($del){
                return redirect()->route('admin.vendedores')->with('alerta','Vendedor(a) Excluido(a) com sucesso')->with('tipoalerta','success');
            }
        }else{
            return redirect()->route('admin.vendedores')->with('alerta','Não é possivel excluir o(a) vendedor(s), existem clientes associados a ele(a).')->with('tipoalerta','danger');
        }
    }
}
