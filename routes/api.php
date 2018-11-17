<?php

use Illuminate\Http\Request;
use App\Http\Models\Noticia;
use App\Http\Models\Produto;
use App\Http\Models\Usuario;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('produto')->group(function(){
    //listar
    Route::get('','ProdutoController@index');
    //pegar pelo id
    Route::get('/{id}','ProdutoController@show');
    //criar produto
    Route::post('','ProdutoController@store');
    //atualizar produto
    Route::put('/{id}','ProdutoController@store');
    //deletar produto
    Route::delete('/{id}','ProdutoController@destroy');
});
Route::prefix('noticia')->group(function(){
    //listar
    Route::get('','NoticiaController@index');
    //pegar pelo id
    Route::get('/{id}','NoticiaController@show');
    //criar destaque
    Route::post('','NoticiaController@store');
    //atualizar destaque
    Route::put('/{id}','NoticiaController@store');
    //deletar destaque
    Route::delete('/{id}','NoticiaController@destroy');    
});
Route::prefix('usuario')->group(function(){
    //listar
    Route::get('','UsuarioController@index');
    //pegar pelo id
    Route::get('/{cpf}','UsuarioController@show');
    //criar usuario
    Route::post('/add','UsuarioController@store');
    //cadastro por aplicativo
    Route::post('/cadastro','UsuarioController@cadastro');
    //recuperar senha
    Route::post('/recuperar/{cpf}','UsuarioController@recupera');
    //atualizar usuario
    Route::put('/{cpf}','UsuarioController@store');
    //deletar usuario
    Route::delete('/{cpf}','UsuarioController@destroy');    
});