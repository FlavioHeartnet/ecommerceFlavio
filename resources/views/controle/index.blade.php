@extends('master')

    @section('conteudo')
    <div class="container">
     <h1>Produtos no Sistema</h1>
        <div class="row">
        @if(isset($sucesso))

        <ul class="alert alert-success">
            <li>Sucesso</li>
        </ul>
            @endif

        @if(isset($deletar))
                    @if($deletar == true)

                <ul class="alert alert-success">
                    <li>Deletado com sucesso</li>
                </ul>

                @else
                    <ul class="alert alert-danger">
                            <li>Ocorreu um erro ao deletar</li>
                        </ul>

                    @endif
                @endif
                <div class="promo-labels">
                    <div data-content="Inserir Produto."><a href="{{ route('controle.create')  }}" class="btn btn-success" >Criar novo produto<i class="fa fa-music"></i></a></div>
                </div>
                <br>
        <table class="table" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>Nome</td>
            <td>estoque</td>
            <td>Preço</td>
            <td>Ações</td>
        </tr>
    @foreach($produtos as $produto)
        <tr>


        <td>{{ $produto->nome  }}</td>
        <td>{{ $produto->estoque  }}</td>
        <td>{{ $produto->valor  }}</td>

        <td>
            <div class="promo-labels">
                <div data-content="Editar Produto."><a href="{{ route('controle.edit', ['id'=>$produto->id])  }}" class="fa fa-edit"></a></div>
                <div data-content="Deletar produto."><a href="{{ route('controle.delete', ['id'=>$produto->id])  }}" class="fa fa-ban"></a></div>
            </div>

        </td>
        </tr>
    @endforeach
        </table>
        {!! $produtos->render()  !!}

        </div>

    </div>


    @stop