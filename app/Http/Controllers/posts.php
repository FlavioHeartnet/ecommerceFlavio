<?php

namespace App\Http\Controllers;

use App\Produto;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class posts extends Controller
{

    public function index()
    {
        return view('404');
    }

    public function home()
    {
        new Produto();

        $produtos = Produto::all();

            return view('welcome', compact($produtos, 'produtos'));

    }


    public function carrinho()
    {

        $produtos = Produto::all();

        return view('carrinho', compact('produtos'));
    }



    public function checkout()
    {
        new Produto();

        $produtos = Produto::all();
        return view('checkout', compact($produtos,'produtos'));
    }
    public function filtros()
    {
        new Produto();

       $produtos = Produto::paginate(5);


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
        new Produto();

        $produtos = Produto::all();
        return view('enderecos', compact($produtos,'produtos'));
    }

    public function userInfo()
    {
        new Produto();

        $produtos = Produto::all();
        return view('userInfo', compact($produtos,'produtos'));
    }
    public function contatos()
    {
        return view('contatos');
    }

    public function login($id)
    {
        new User();
        $user = User::find($id);
        return redirect('welcome', compact($user,'user'));
    }



}
