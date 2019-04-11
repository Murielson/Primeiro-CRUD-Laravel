@extends('layouts.app', ['current'=>'novaCat']);

@section('body')
    <div class="card-border">
        <div class="card-body">    
            {{-- Criando formulário --}}
            {!! Form::open(['route'=>'storeCat', 'method'=>'POST', 'class'=>'xx']) !!}
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria : </label>
                    {!! Form::text('nomeCategoria', null, ['class'=>'form-control', 'placeholder'=>'Nome da categoria aqui :)', 'id'=>'nomeCategoria']) !!}
                </div>
                {!! Form::submit('Cadastrar :)', ['class'=>'btn btn-dark'])!!}
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            {!! Form::close() !!}
        </div>
    </div>  
@endsection