<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Validação do formulário
    protected function validaForm(Request $request, $id = null){
        
        $regras = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telefone' => ['required'],
            'cpf' => ['required','unique:users,cpf,'.$id],
        ];

        $request->validate($regras);
        $data = $request->except('_token');
        return $data;
    }
    protected function validaFormEdt(Request $request, $id = null){
        
        $regras = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'telefone' => ['required'],
            'cpf' => ['required','unique:users,cpf,'.$id],
        ];

        $request->validate($regras);
        $data = $request->except('_token');
        return $data;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.formAddUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validaForm($request);
        // unset($data['cadastrar']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('admin.users')->with('alerta','Usuário cadastrado com sucesso')->with('tipoalerta','success');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::find($id);
        return view('admin.formEdtUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validaFormEdt($request,$id);
        $upd  = User::where('id',$id)->update($data);
        return redirect()->route('admin.users')->with('alerta','Usuário alterado com sucesso')->with('tipoalerta','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rem = User::where('id',$id)->delete();
        return redirect()->route('admin.users')->with('alerta','Usuário removido com sucesso')->with('tipoalerta','success');
    }
}
