@extends('layouts.app', ['current'=>'produto'])

@section('body')
    <h4>Produtos</h4>
    <div class="card-border">
        <div class="card-body">
            @if(sizeof($produtos) == 0)
                <h5>Sem nem um produto no momento!</h5>
            @else
            <table class="table table-borderless">
                <thead class="table table-dark">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Preco</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach ($produtos as $item)
                        <tr>
                            <td>{{$item->id }}</td>
                            <td>{{$item->nome}}</td>
                            <td>R$ - {{$item->preco}}</td>
                            <td>{{$item->estoque}}</td>
                            <td>{{$item->categoria_id}}</td>
                            <td>
                                <a href="{{ route('editProd', ['id'=>$item->id]) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ route('destroyProd', ['id'=>$item->id]) }}" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>                    
                    @endforeach
                </tbody>
            </table>
            @endempty
        </div>
        <div class="card-footer">
            <a href="{{ route('createProd') }}" class="btn btn-success">Adicionar Produto</a>
        </div>
    </div>
@endsection