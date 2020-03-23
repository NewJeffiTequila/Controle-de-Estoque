@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table id="datatable-basic" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Valor</th>
                                        <th>Quantidade</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody class="list">
                                    @if(isset($data) && count($data) > 0)
                                        @foreach($data as $key=>$item)
                                        <tr>
                                            <td>{{$item->name}}</td>                                           
                                            <td>R$:{{$item->price}}</td>    
                                            <td>{{$item->amount}}</td>    
                                                <td>
                                                    {{-- <a class="btn btn-sm btn-warning"
                                                        href="{{ route($rota.'edit',  $item->id)}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                <form action="{{ route($rota.'destroy', $item->id) }}" class="form" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr><td>Nenhum produto cadastrado</td></tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
