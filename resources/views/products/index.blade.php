@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Produtos</li>
                </ol>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-info" href="{{ route('products.adicionar') }}">Adicionar</a>
                    </p>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Produto</th>
                                <th>Valor</th>
                                <th>Categoria</th>                                
                            </tr>
                        </thead>
                        <tbody>

                        <tbody>
                            @foreach($produtos as $produto)

                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>{{ $produto->categories_id }}</td>
                            
                                <td>
                                    <a class="btn btn-default" href="#">Detalhe</a>
                                    <a class="btn btn-default" href="#">Editar</a>
                                    <a class="btn btn-danger" href="#">Deletar</a>
                                </td>
                            </tr>                            

                            @endforeach
                            
                        </tbody>
                           
                        </tbody>
                        
                    </table>

                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection