@extends('layouts.app', ['current'=>'home'])

@section('body')
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-tittle">Produtos Name</h5>
                        <p class="card-text">Produto Desc</p>
                        <a href="{{ route('indexProd') }}" class="btn btn-primary">Ver Produtos</a>
                    </div>
                </div>
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-tittle">Categorias Name</h5>
                        <p class="card-text">Categoria Desc</p>
                        <a href="{{ route('categorias') }}" class="btn btn-primary">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection