@extends('layouts.app', ['current'=>'categoria'])

@section('body')
    <h4>Categorias</h4>
    <div class="card-border">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categorias as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nome}}</td>
                            <td>
                                <a href="{{route('editCat', ['id'=>$item->id])}}" class="btn btn-dark">Editar</a>
                                <a href="{{route('deleteCat', ['id'=>$item->id])}}" class="btn btn-danger">Deletar</a>
                            </td>
                        </tr>
                    @empty
                        Sem categorias no momento!
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{route('createCat')}}" class="btn btn-dark">Nova Categoria</a>
        </div>
    </div>
@endsection