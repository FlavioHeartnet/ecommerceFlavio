
<section class="catalog-grid">
    <div class="container">
        <h2 class="primary-color">Novidades</h2>
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
            <!--Tile-->

            <!--Tile-->

            <!--Tile-->

        </div>
    </div>
</section><!--Catalog Grid Close-->

