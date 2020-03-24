@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row">
                <div class="col">
                    <div class="card ">
                        <div class="card-header">
                                <h3 class="mb-0">Cadastro de Produto
                                </h3>

                        </div>
                        <div class="card-body ">
                            <form action="{{route($rota.'store')}}" method="POST"
                            enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nome do Produto: *</label>

                                    <input required type="text" class="form-control" name="name"
                                                   value="">
                                </div>   
  
                            <div class="col-md-3">
                                    <div class="form-group">
                                            <label>Quantidade* : </label>
                                            <input type="number" class="form-control" name="amount"
                                                   required>
                                </div><!-- /.form-group -->
                            </div><!-- /.col -->
                            <div class="col-md-3">
                                    <div class="form-group">
                                            <label>Valor *: </label>
                                            <input required type="number" class="form-control" name="value"
                                                   value="">
                                </div><!-- /.form-group -->
                            </div><!-- /.col -->
                            
                        <hr>
                        <div  style="width:100%;text-align:center">                            
                            <div class="form-group ">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                                <a class="btn btn-danger" href="{{route($rota.'index')}}"> Voltar </a>
                            </div>
                        </div>
                            
                        </form>
                    </div>
                    </div>
                </div>
        </div>

    </div>


@endsection
