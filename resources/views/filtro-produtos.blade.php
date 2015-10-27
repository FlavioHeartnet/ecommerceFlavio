@extends('master')

@section('conteudo')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Filtro de produtos</li>
</ol><!--Breadcrumbs Close-->

<section class="catalog-grid">
<div class="container">
<h2 class="with-sorting">Nossos Produtos</h2>


<div class="row">

<!--Filters-->
<div class="filters-mobile col-lg-3 col-md-3 col-sm-4">
    <div class="shop-filters">

        <!--Price Section-->
        <section class="filter-section">
            <h3>Filtrar por preço</h3>
            <form method="get" name="price-filters">
                <span class="clear" id="clearPrice" >Limpra preço</span>
                <div class="price-btns">
                    <button class="btn btn-success btn-sm" value="1">Até R$ 500</button><br/>
                    <button class="btn btn-success btn-sm disabled" value="2">R$500-R$1000</button><br/>
                    <button class="btn btn-success btn-sm" value="3">R$1000-R$2500</button><br/>
                    <button class="btn btn-success btn-sm" value="300$-1000$">R$2500-R$99999</button>
                </div>
                <div class="price-slider">
                    <div id="price-range"></div>
                    <div class="values group">
                        <!--data-min-val represent minimal price and data-max-val maximum price respectively in pricing slider range; value="" - default values-->
                        <span class="labels">R$ - </span>
                        <input class="form-control" name="minVal" id="minVal" type="text" data-min-val="10" value="180">
                        <span class="labels">R$</span>
                        <input class="form-control" name="maxVal" id="maxVal" type="text" data-max-val="2500" value="1400">

                    </div>
                    <input class="btn btn-primary btn-sm" type="submit" value="Filtrar">
                </div>
            </form>
        </section>

        <!--Colors Section-->
        <section class="filter-section">
            <h3>Filtrar por marca</h3>
            <span class="clear clearChecks">Limpar Marcas</span>
            <label>
                <input type="checkbox" name="colors" value="black" id="color_0" checked>
                Gibson (12)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="white" id="color_1">
                Fender (1)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="green" id="color_2">
                Epiphone  (34)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="blue" id="color_3">
                Taylor (23)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="red" id="color_4">
                Martin (12)</label>
        </section>

        <!--Colors Section-->


        <!--Categories Section-->
        <section class="filter-section">
            <h3>Categoria</h3>
            <ul class="categories">
                <li ><a href="#">Violão (12)</a><!--Class "has-subcategory" for dropdown propper work-->
                </li>
                <li><a href="#">Guitarra (34)</a></li>
                <li><a href="#">Baixo (78)</a></li>
                <li><a href="#">Amplificador (45)</a>
                </li>

            </ul>
        </section>
    </div>
</div>

<!--Tiles-->
<div class="col-lg-9 col-md-9 col-sm-8">
<div class="row">
<!--Tile-->
@foreach($produtos as $produto)
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="badges">
        @if($produto->estoque > 0)
            <span class="sale"></span>
            @elseif($produto->estoque <= 0)
            <span class="out"></span>
            @endif
        </div>
        <div class="price-label">R$ {{ $produto->valor }} </div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/'.$produto->foto)  }}" alt="1"/></a>
        <div class="footer">
            <a href="#">{{ $produto->nome }} </a>

            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>Carrinho</span><i class="icon-shopping-cart"></i></a>
                <!--Share Button-->
                <div class="share-btn">
                    <div class="hover-state">
                        <a class="fa fa-facebook-square" href="#"></a>
                        <a class="fa fa-twitter-square" href="#"></a>
                        <a class="fa fa-google-plus-square" href="#"></a>
                    </div>
                    <i class="fa fa-share"></i>
                </div>
                <!--Add To Wishlist Button-->
                <a class="wishlist-btn" href="#">
                    <div class="hover-state">Lista de Desejo</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach


</div>
<!--Pagination-->
<ul class="pagination">
    <li class="prev-page"><a class="icon-arrow-left" href="#"></a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li class="next-page"><a class="icon-arrow-right" href="#"></a></li>
</ul>
</div>
</div>
</div>
</section>

@stop