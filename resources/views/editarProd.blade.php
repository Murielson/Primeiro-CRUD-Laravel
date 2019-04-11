@extends('layouts.app', ['current'=>'produto'])

@section('body')
    <div class="card-border">
        <div class="card-body">
            <h5>Adicione seu produto :</h5>
            {!! Form::open(['route'=>['updateProd', $produtos->id]]) !!}
                <div class="form-group">
                    <label for="nomeProd">Nome :</label>
                    {!! Form::text('nomeProd', $produtos->nome, ['class'=>'form-control','id'=>'nomeProd'])!!}
                    <label for="precoProd">Preço :</label>
                    {!! Form::number('precoProd', $produtos->preco,['class'=>'form-control', 'step'=>'any']) !!}
                    <label for="estoqueProd">Quantidade : </label>
                    {!! Form::number('estoqueProd',$produtos->estoque,['class'=>'form-control']) !!}
                    <label for="categoria">Categorias : </label>
                    @if(sizeof($categorias) == 0)
                        Não temos categorias ainda :/
                    @else
                    <select name="categoriaProd" class="form-control">
                        @foreach ($categorias as $item)
                            <option value="{{ $item->id }}">{{$item->nome}}</option>   
                        @endforeach
                    </select>
                    @endif
                    <br>
                    {!! Form::submit('Cadastrar Produto', ['class'=>'btn btn-success']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection