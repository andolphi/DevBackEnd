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
      <div class="container-fluid animate__animated animate__fadeInUp animate__faster">
        <div class="row">
          <!-- left column -->
          
          <!--/.col (left) -->
          <!-- right column -->
        
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  
                    Serviços 
                  
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
                      <th width="20%" ></th>  
                      <th>Título</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($servicos as $item)
                      <tr>
                        
                        <td>
                          
                          <a id="btn_alt{{$item->id}}" href="{{route('admin.formEdtServico',$item->id)}}" onmouseover="animacao_on('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')" onmouseout="animacao_off('#btn_alt{{$item->id}}','#img_alt{{$item->id}}')"><img id="img_alt{{$item->id}}" src="{{asset('img/editar.png')}}" height="30px" title="Alterar dados cadastrais de {{$item->name}}"></a>
                          
                          
                        </td>
                        <td>{{ucwords($item->titulo)}}</td>
                        
                                                
                      </tr>
                    @endforeach
                  </tbody>
                  <thead>
                    <tr>
                      <th width="20%" ></th>  
                      <th>Título</th>
                      

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
