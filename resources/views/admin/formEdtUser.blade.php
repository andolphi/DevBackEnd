@extends('layouts.index')

@section('conteudo')
<!--<div class="content-wrapper">-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            
            
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Editar Usuário</h3>
              </div>
              <!-- /.card-header -->
             <div class="card-body">
                
                  
                      <div class="col-sm-12">
                        <div class="form-group">
                            <form method="POST" action="{{ route('admin.edtUser',$user->id) }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                            
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                

                                <div class="form-group row">
                                    <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
        
                                    <div class="col-md-6">
                                        <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ $user->telefone }}" required autocomplete="telefone" autofocus >
        
                                        @error('telefone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>
        
                                    <div class="col-md-6">
                                        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ $user->cpf }}" required autocomplete="cpf" autofocus>
        
                                        @error('cpf')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="data_nasc" class="col-md-4 col-form-label text-md-right">Data Nascimento</label>
        
                                    <div class="col-md-6">
                                        <input id="data_nasc" type="date" class="form-control @error('data_nasc') is-invalid @enderror" name="data_nasc" value="{{ $user->data_nasc }}" autocomplete="data_nasc" autofocus>
                                        <small id="descricaoHelp" class="form-text text-muted">* Opcional .</small>
                                        @error('data_nasc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dt_nasc" class="col-md-4 col-form-label text-md-right">Mensagem</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem" rows="10" maxlength="500">{{ $user->mensagem }}</textarea>
                                        <small id="descricaoHelp" class="form-text text-muted">* Opcional .</small>
                                        @error('mensagem')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                @component('components.mascaraCel')
                    
                                @endcomponent

                                @component('components.mascaraCPF')
                    
                                @endcomponent
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Editar
                                        </button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                      </div>   
                  
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!--</div>-->





@endsection
