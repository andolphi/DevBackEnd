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
                <h3 class="card-title">Dados do(a) Vendedor(a)</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
                      <div class="col-sm-12">
                        <div class="form-group">
                            <form method="post" action="{{ route('admin.addVend') }}" onsubmit="this.cadastrar.style.pointerEvents = 'none'; this.cadastrar.textContent = 'Cadastrando...'">
                                @csrf
                                 
                                 <div class="form-group row">
                                     <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                     <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="new-password" maxlength="100" value="{{old('name')}}" aria-describedby="nameHelp" >
                                        <!--<small id="senhaatualHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                     </div>
                                     
                                 </div>  

                                 
                                 </div>
                                 @component('components.mascaraCel') @endcomponent
                                 <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" name="cadastrar" class="btn btn-primary">
                                            Cadastrar
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
