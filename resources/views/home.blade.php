@extends('layouts.app')

@section('content')
<div class="container">
<a class="navbar-brand" href="{{ url('/products') }}">
                   Produtos
                </a>
                <a class="navbar-brand" href="{{ url('/categories') }}">
                   Categoria
                </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
