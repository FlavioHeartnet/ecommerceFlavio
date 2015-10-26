@extends('master')

@section('conteudo')

<section class="wishlist">
    <div class="container">
        <div class="row">

            <!--Items List-->
            <div class="col-lg-9 col-md-9">
                <h2 class="title">Lista de Desejos</h2>
                <table class="items-list">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Nome do Produto</th>
                        <th>Preços</th>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="/detalhes"><img src="{{asset('img/catalog/shopping-cart-thumb-1.jpg')}}" alt="Nikon D4S"/></a></td>
                        <td class="name"><a href="/detalhes">Nikon D4S</a></td>
                        <td class="price">715,00 $</td>
                        <td class="button"><a class="btn btn-primary btn-sm" href="#"><i class="icon-shopping-cart"></i>Por no carrinho</a></td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="/detalhes"><img src="{{asset('img/catalog/shopping-cart-thumb-2.jpg')}}" alt="Nikkor 11-27.5"/></a></td>
                        <td class="name"><a href="/detalhes">Nikkor</a></td>
                        <td class="price">715,00 $</td>
                        <td class="button"><a class="btn btn-primary btn-sm" href="#"><i class="icon-shopping-cart"></i>Por no carrinho</a></td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="/detalhes"><img src="{{asset('img/catalog/shopping-cart-thumb-1.jpg')}}" alt="Nikon D4S"/></a></td>
                        <td class="name"><a href="/detalhes">Nikon D4S</a></td>
                        <td class="price">715,00 $</td>
                        <td class="button"><a class="btn btn-primary btn-sm disabled" href="#">Fora de Estoque</a></td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="/detalhes"><img src="{{asset('img/catalog/shopping-cart-thumb-2.jpg')}}" alt="Nikkor 11-27.5"/></a></td>
                        <td class="name"><a href="/detalhes">Nikkor</a></td>
                        <td class="price">715,00 $</td>
                        <td class="button"><a class="btn btn-primary btn-sm" href="#"><i class="icon-shopping-cart"></i>Por no carrinho</a></td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="/detalhes"><img src="{{asset('img/catalog/shopping-cart-thumb-1.jpg')}}" alt="Nikon D4S"/></a></td>
                        <td class="name"><a href="/detalhes">Nikon D4S</a></td>
                        <td class="price">715,00 $</td>
                        <td class="button"><a class="btn btn-primary btn-sm disabled" href="#">Fora de Estoque</a></td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                </table>
            </div>

            <!--Sidebar-->
            @include('top-rated')
        </div>
    </div>
</section>

@stop