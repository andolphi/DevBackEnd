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
                            <form method="post" action="{{route('admin.edtVend',$vendedor->id)}}" onsubmit="this.alterar.style.pointerEvents = 'none'; this.alterar.textContent = 'Alterando...'">
                                @csrf
                                <div class="form-group row">
                                     <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                     <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="new-password" maxlength="100" value="{{$vendedor->name}}" aria-describedby="nameHelp" >
                                        <!--<small id="senhaatualHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                     </div>
                                     
                                </div>  

                                
                                 <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" name="alterar" class="btn btn-primary">
                                            Alterar
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

  <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  
                    Clientes (<b>{{count($vendedor->cliente)}}</b>) - {{date('d/m/Y - H:i')}}
                  
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                    <!--<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="20%"><a class="btn btn-primary btn-sm d-print-none" href="{{route('admin.formAddCliente',$vendedor->id)}}" role="button">Incluir</a></th>    
                      <th>Nome</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($vendedor->cliente as $item)
                      <tr>
                        <td>
                          <a id="btn_del{{$item->id}}" href="#" data-toggle="modal" data-target="#RemoverModal{{$item->id}}" onmouseover="animacao_on('#btn_del{{$item->id}}','#img_del{{$item->id}}')" onmouseout="animacao_off('#btn_del{{$item->id}}','#img_del{{$item->id}}')"><img id="img_del{{$item->id}}" src="{{asset('img/deletar.png')}}" height="30px" title="Excluir {{$item->name}}"></a>
                          <a id="btn_alt{{$item->id}}" href="{{route('admin.formEdtCliente',$item->id)}}" onmouseover="animacao_on('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')" onmouseout="animacao_off('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')"><img id="img_alt{{$item->id}}" src="{{asset('img/editar.png')}}" height="30px" title="Alterar dados cadastrais de {{$item->name}}"></a>
                          
                        </td>
                        <td>{{ucwords($item->name)}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                      <th width="20%" ></th>  
                      <th>Nome</th>

                    </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!--</div>-->

@endsection
