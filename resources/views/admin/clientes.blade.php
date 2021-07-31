@extends('layouts.index')

@section('conteudo')

@foreach ($clientes as $item)
<div class="modal fade" id="RemoverModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Excluir <b>Cliente {{$item->name}}</b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <a role="button" class="btn btn-danger" href="{{route('admin.remCliente',$item->id)}}" onclick="this.style.pointerEvents = 'none'; this.textContent = 'Excluindo...'"> Excluir </a> 
      </div>
    </div>
  </div>
</div>
@endforeach
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
      <div class="container-fluid animate__animated animate__fadeInUp animate__faster">
        <div class="row">
          <!-- left column -->
          
          <!--/.col (left) -->
          <!-- right column -->
        
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  
                    Clientes (<b>{{count($clientes)}}</b>) - {{date('d/m/Y - H:i')}}
                  
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="20%"><a class="btn btn-primary btn-sm d-print-none" href="{{route('admin.formAddCliente')}}" role="button">Incluir</a></th>    
                      <th>Nome</th>
                      <th>Vendedor</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clientes as $item)
                      <tr>
                        
                        <td>
                          <a id="btn_del{{$item->id}}" href="#" data-toggle="modal" data-target="#RemoverModal{{$item->id}}" onmouseover="animacao_on('#btn_del{{$item->id}}','#img_del{{$item->id}}')" onmouseout="animacao_off('#btn_del{{$item->id}}','#img_del{{$item->id}}')"><img id="img_del{{$item->id}}" src="{{asset('img/deletar.png')}}" height="30px" title="Excluir {{$item->name}}"></a>
                          <a id="btn_alt{{$item->id}}" href="{{route('admin.formEdtCliente',$item->id)}}" onmouseover="animacao_on('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')" onmouseout="animacao_off('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')"><img id="img_alt{{$item->id}}" src="{{asset('img/editar.png')}}" height="30px" title="Alterar dados cadastrais de {{$item->name}}"></a>
                          
                          
                        </td>
                        <td>{{ucwords($item->name)}}</td>
                        <td>@if(isset($item->vendedor->name)) {{ucwords($item->vendedor->name)}} @endif</td>
                                                
                      </tr>
                    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                      <th width="20%" ></th>  
                      <th>Nome</th>
                      <th>Vendedor</th>

                    </tr>
                  </thead>
                </table>
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
