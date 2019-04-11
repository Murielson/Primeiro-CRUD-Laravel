<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

//Rota de Categorias
Route::get('/categoria', 'CategoriaController@index')->name('categorias');
//Create
Route::get('/categoria/novo', 'CategoriaController@create')->name('createCat');
//Store
Route::post('/categoria', 'CategoriaController@store')->name('storeCat');
//Edit
Route::get('/editar/{id}', 'CategoriaController@edit')->name('editCat');
//Update
Route::post('/editar/{id}', 'CategoriaController@update')->name('updateCat');
//Delete
Route::get('/delete/{id}', 'CategoriaController@destroy')->name('deleteCat');


//Produtos Rotas
Route::prefix('produto')->group(function(){
    //Index
    Route::get('listar', 'ProdutoController@index')->name('indexProd');
    //Create
    Route::get('adicionar', 'ProdutoController@create')->name('createProd');
    //Store
    Route::post('salvar', 'ProdutoController@store')->name('storeProd');
    //Edit
    Route::get('editar/{id}', 'ProdutoController@edit')->name('editProd');
    //Update
    Route::post('editar/{id}', 'ProdutoController@update')->name('updateProd');
    //Destroy
    Route::get('remover/{id}', 'ProdutoController@destroy')->name('destroyProd');
});