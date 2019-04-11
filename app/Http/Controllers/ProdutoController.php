<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Models
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $produtos = Produto::all();
        return view('produto', compact('produtos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('novoPro', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomeProd');
        $produto->estoque = $request->input('estoqueProd');
        $produto->preco = $request->input('precoProd');
        $produto->categoria_id = $request->input('categoriaProd');
        $produto->save();

        return redirect('produto/listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $produtos = Produto::find($id);
        return view('editarProd', compact(['categorias', 'produtos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->input('nomeProd');
        $produto->estoque = $request->input('estoqueProd');
        $produto->preco = $request->input('precoProd');
        $produto->categoria_id = $request->input('categoriaProd');
        $produto->save();

        return redirect('produto/listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletar = Produto::find($id);
        $deletar->delete();
        return redirect('produto/listar');
    }
}
