@extends('layouts.app', ['current'=>'edicao'])

@section('body')
    <div class="card-border">
        <div class="card-body">
            {!! Form::open(['route'=>['updateCat', $cat->id],'method'=>'POST'])!!}
                <div  class="form-group">
                    <label for="nome">Nome da categoria</label>
                    {!! Form::text('nome',$cat->nome, ['class'=>'form-control'])!!}
                </div>     
                {!! Form::submit('Salvar', ['class'=>'btn btn-dark'])!!}
            {!! Form::close()!!}
        </div>
    </div>
@endsection