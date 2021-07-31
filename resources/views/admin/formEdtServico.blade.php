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
                <h3 class="card-title">Editar Serviço</h3>
              </div>
              <!-- /.card-header -->
             <div class="card-body">
                
                  
                      <div class="col-sm-12">
                        <div class="form-group">
                            <form method="POST" action="{{ route('admin.edtServico',$servico->id) }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="titulo" class="col-md-4 col-form-label text-md-right">Título</label>
                                            
                                    <div class="col-md-6">
                                        <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $servico->titulo }}" required autocomplete="titulo" autofocus>
        
                                        @error('titulo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

                                    <div class="col-md-6">
                                        <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" rows="10" required maxlength="500">{{ $servico->descricao }}</textarea>
                                        
                                        @error('descricao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

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
