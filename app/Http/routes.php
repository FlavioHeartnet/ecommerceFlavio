<?php



Route::get('/', function () {
    return view('welcome');
});


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

Route::get('controle/create','Produtos@create');
Route::post('controle/store','Produtos@store');


