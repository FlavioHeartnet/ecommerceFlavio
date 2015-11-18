<?php



Route::get('/', 'posts@home');


Route::get('/404', 'posts@index');
Route::get('/carrinho', 'posts@carrinho');
Route::get('/cadastro', 'posts@cadastro');
Route::get('/checkout', 'posts@checkout');
Route::get('/filtros', 'posts@filtros');
Route::get('/dados', 'posts@dados');
Route::get('/historico', 'posts@historico');
Route::get('/detalhes', 'posts@detalhes');
Route::get('/lista-desejos', 'posts@desejos');
Route::get('/regras', 'posts@regras');
Route::get('/suporte', 'posts@suporte');
Route::get('/endereco', 'posts@enderecos');
Route::get('/userInfo', 'posts@userInfo');
Route::get('/contatos', 'posts@contatos');

Route::group(['prefix'=>'controle'], function(){

    Route::get('', ['as'=>'controle.index', 'uses'=>'Produtos@index']);
    Route::get('create', ['as'=>'controle.create', 'uses'=>'Produtos@create']);
    Route::post('store', ['as'=>'controle.store', 'uses'=>'Produtos@store']);
    Route::get('edit/{id}', ['as'=>'controle.edit', 'uses'=>'Produtos@edit']);
    Route::put('update/{id}', ['as'=>'controle.update', 'uses'=>'Produtos@update']);
    Route::get('delete/{id}', ['as'=>'controle.delete', 'uses'=>'Produtos@destroy']);


});

Route::post('finalizar-compra', ['as'=>'finalizar', 'uses'=>'Compras@create']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([

    'auth'=>'Auth\AuthController',
    'password' => 'Auth\PasswordController'

]);

