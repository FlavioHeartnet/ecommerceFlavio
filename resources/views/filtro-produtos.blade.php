@extends('master')

@section('conteudo')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Filtro de produtos</li>
</ol><!--Breadcrumbs Close-->

<section class="catalog-grid">
<div class="container">
<h2 class="with-sorting">Filters left 3 columns</h2>
<div class="sorting">
    <a href="#">Sort by name</a>
    <a href="#">Sort by price</a>
</div>
<div class="subnav">
    <a href="#">iPhone cases</a>
    <a href="#">iPad cases</a>
</div>
<div class="row">

<!--Filters-->
<div class="filters-mobile col-lg-3 col-md-3 col-sm-4">
    <div class="shop-filters">

        <!--Price Section-->
        <section class="filter-section">
            <h3>Filter by price</h3>
            <form method="get" name="price-filters">
                <span class="clear" id="clearPrice" >Clear price</span>
                <div class="price-btns">
                    <button class="btn btn-success btn-sm" value="below 50$">below 50$</button><br/>
                    <button class="btn btn-success btn-sm disabled" value="50$-100$">50$-100$</button><br/>
                    <button class="btn btn-success btn-sm" value="100$-300$">100$-300$</button><br/>
                    <button class="btn btn-success btn-sm" value="300$-1000$">300$-1000$</button>
                </div>
                <div class="price-slider">
                    <div id="price-range"></div>
                    <div class="values group">
                        <!--data-min-val represent minimal price and data-max-val maximum price respectively in pricing slider range; value="" - default values-->
                        <input class="form-control" name="minVal" id="minVal" type="text" data-min-val="10" value="180">
                        <span class="labels">$ - </span>
                        <input class="form-control" name="maxVal" id="maxVal" type="text" data-max-val="2500" value="1400">
                        <span class="labels">$</span>
                    </div>
                    <input class="btn btn-primary btn-sm" type="submit" value="Filter">
                </div>
            </form>
        </section>

        <!--Colors Section-->
        <section class="filter-section">
            <h3>Filter by color</h3>
            <span class="clear clearChecks">Clear colors</span>
            <label>
                <input type="checkbox" name="colors" value="black" id="color_0" checked>
                Black (12)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="white" id="color_1">
                White (1)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="green" id="color_2">
                Green  (34)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="blue" id="color_3">
                Blue (23)</label>
            <br>
            <label>
                <input type="checkbox" name="colors" value="red" id="color_4">
                Red (12)</label>
        </section>

        <!--Colors Section-->
        <section class="filter-section">
            <h3>Filter by size</h3>
            <span class="clear clearChecks">Clear size</span>
            <label>
                <input type="checkbox" name="sizes" value="small" id="size_0" checked>
                Small (12)</label>
            <br>
            <label>
                <input type="checkbox" name="sizes" value="white" id="size_1">
                Medium (34)</label>
            <br>
            <label>
                <input type="checkbox" name="sizes" value="green" id="size_2">
                Large (11)</label>
            <br>
            <label>
                <input type="checkbox" name="sizes" value="blue" id="size_3">
                Extra large (1)</label>
            <br>
            <label>
                <input type="checkbox" name="sizes" value="red" id="size_4">
                Superman (0)</label>
        </section>

        <!--Categories Section-->
        <section class="filter-section">
            <h3>Categories</h3>
            <ul class="categories">
                <li class="has-subcategory"><a href="#">iPhone cases (123)</a><!--Class "has-subcategory" for dropdown propper work-->
                    <ul class="subcategory">
                        <li><a href="#">iPhone cases (1)</a></li>
                        <li><a href="#">iPad cases (45)</a></li>
                        <li><a href="#">MacBook cases (34)</a></li>
                        <li><a href="#">Something (12)</a></li>
                        <li><a href="#">Air cases (23)</a></li>
                    </ul>
                </li>
                <li><a href="#">iPad cases (34)</a></li>
                <li><a href="#">MacBook cases (78)</a></li>
                <li class="has-subcategory"><a href="#">Something (45)</a>
                    <ul class="subcategory">
                        <li><a href="#">Subcategory (1)</a></li>
                        <li><a href="#">Subcategory (45)</a></li>
                        <li><a href="#">Subcategory (23)</a></li>
                    </ul>
                </li>
                <li><a href="#">Air cases (23)</a></li>
            </ul>
        </section>
    </div>
</div>

<!--Tiles-->
<div class="col-lg-9 col-md-9 col-sm-8">
<div class="row">
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="badges">
            <span class="sale"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/1.jpg')  }}" alt="1"/></a>
        <div class="footer">
            <a href="#">Nikon D5300</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="badges">
            <span class="out"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <div class="price-label old-price">920,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/2.jpg')  }}" alt="2"/></a>
        <div class="footer">
            <a href="#">Nikon Coolpix</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="badges">
            <span class="best-seller"></span>
        </div>
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/3.jpg')  }}" alt="3"/></a>
        <div class="footer">
            <a href="#">Nikon WP-N3</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/4.jpg')  }}" alt="4"/></a>
        <div class="footer">
            <a href="#">Nikkor 10-30 VR</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <div class="price-label old-price">920,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/5.jpg')  }}" alt="5"/></a>
        <div class="footer">
            <a href="#">Nikon WU 1b</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/6.jpg')  }}" alt="6"/></a>
        <div class="footer">
            <a href="#">Nikon V3</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/7.jpg')  }}" alt="7"/></a>
        <div class="footer">
            <a href="#">Nikon J4</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                     <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/8.jpg')  }}" alt="8"/></a>
        <div class="footer">
            <a href="#">Nikkor AF-S</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Tile-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="tile">
        <div class="price-label">715,00 $</div>
        <div class="price-label old-price">920,00 $</div>
        <a href="#"><img src="{{ asset('img/catalog/tiles/9.jpg')  }}" alt="9"/></a>
        <div class="footer">
            <a href="#">Nikon AW1</a>
            <span>by Pirate3d</span>
            <div class="tools">
                <div class="rate">
                    <span class="active"></span>
                    <span class="active"></span>
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Add To Cart Button-->
                <a class="add-cart-btn" href="#"><span>To cart</span><i class="icon-shopping-cart"></i></a>
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
                    <div class="hover-state">Wishlist</div>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>
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