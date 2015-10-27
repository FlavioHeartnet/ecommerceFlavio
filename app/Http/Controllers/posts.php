<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class posts extends Controller
{

    public function index()
    {
        return view('404');
    }


    public function carrinho()
    {
        return view('carrinho');
    }

    public function cadastro()
    {
        return view('register');
    }

    public function checkout()
    {
        return view('checkout');
    }
    public function filtros()
    {

        $produtos = new Produto();
        $produtos = Produto::all();

        return view('filtro-produtos',compact($produtos,'produtos'));
    }
    public function dados()
    {
        return view('userInfo');
    }
    public function historico()
    {
        return view('historico-compras');
    }
    public function detalhes()
    {
        return view('detalhes');
    }
    public function desejos()
    {
        return view('listaDesejo');
    }
    public function regras()
    {
        return view('regras-envio');
    }
    public function suporte()
    {
        return view('suporte');
    }
    public function enderecos()
    {
        return view('enderecos');
    }

    public function userInfo()
    {
        return view('userInfo');
    }
    public function contatos()
    {
        return view('contatos');
    }



}
