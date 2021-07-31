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
                <h3 class="card-title">Dados do Cliente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
                      <div class="col-sm-12">
                        <div class="form-group">
                            <form method="post" action="{{ route('admin.addCliente') }}" onsubmit="this.cadastrar.style.pointerEvents = 'none'; this.cadastrar.textContent = 'Cadastrando...'">
                                @csrf
                                
                                @if (count($vendedores)>0)
                                <div class="form-group row">
                                  <label for="vendedor_id" class="col-md-4 col-form-label text-md-right">Vendedor</label>
                                  <div class="col-md-6">
                                    
                                    <select class="form-control @error('vendedor_id') is-invalid @enderror" name="vendedor_id" aria-describedby="vendedorHelp" >
                                      <option value=""></option>
                                      @foreach ($vendedores as $vend)
                                          <option value="{{$vend->id}}">{{$vend->name}}</option>
                                      @endforeach
                                    </select> 
                                    
                                    
                                    @error('vendedor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>      
                                @endif
                                 
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

                                 
                                 
                                 @component('components.mascaraCel') @endcomponent
                                 <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" name="cadastrar" class="btn btn-primary">
                                            Cadastrar
                                        </button>
                                    </div>
                                    
                                     
                                 </div>
                            </form>
                            <script>
                              $("input[type = 'text']").on("keyup", function (e) {
                                var val = $(vr_plano).val();
                                var str=val.replace(",",".");
                                $(vr_plano).val(str);
                              });
                            </script>
                            <script type="text/javascript">
                              $('select[name=empresa_id]').change(function(){

                                var empresa_id = $(this).val();
                                
                                if(empresa_id != ''){
                                  $("#dia_venc").attr("readonly","true");
                                }else{
                                  $('#dia_venc').removeAttr('readonly');
                                }
                                
                                $.get("{{route('home')}}/getVencimento/0/" + empresa_id, function(dia_venc){
                                  
                                  $.each(dia_venc,function(key,value){
                                      $('#dia_venc').val(value.dia_venc);
                                  });
                                  
                                });

                              });
                          </script>
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
