<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;

use Illuminate\Http\Request;


class Produtos extends Controller
{
    /**
     * @var Produto
     */
    private $produto;

    function __construct(Produto $produto)
    {

        $this->produto = $produto;
    }

    public function index()
    {
        $produtos = $this->produto->paginate(6);

        return view('controle.index', compact('produtos'));
    }

    public function create()
    {
        return view('controle.createProduto');
    }


    public function store(ProdutoRequest $request)
    {
        $sucesso = $this->produto->create($request->all());




        return view('controle.createProduto', compact('sucesso'));
    }


    public function show($id)
    {
        $produto = $this->produto->find($id);

        return view('controle.edit',compact('produto'));
    }


    public function edit($id)
    {
        $produto = new Produto();
        $produto = Produto::find($id);

        return view('controle.edit', compact('produto'));
    }


    public function update(ProdutoRequest $request, $id)
    {
        $sucesso = $this->produto->find($id)->update($request->all());


        return view('controle.edit', compact('sucesso'));
    }


    public function destroy($id)
    {
        $deletar = $this->produto->find($id)->delete();

        return redirect()->route('controle.index', compact('deletar'));
    }
}
