@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Produtos</div>

                <div class="card-body">
                    
                    <form method="post"  action="{{ route('products.salvar') }}" >
                    {{ csrf_field() }}
  <div class="form-group" >
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Insira o nome do produto">
    
 </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" name="valor" class="form-control" placeholder="Insira o valor do produto">
  </div>

 
  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
