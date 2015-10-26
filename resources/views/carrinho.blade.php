
@extends('master')



@section('conteudo')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Carrinho</li>
</ol><!--Breadcrumbs Close-->

<!--Shopping Cart-->
<section class="shopping-cart">
    <div class="container">
        <div class="row">

            <!--Items List-->
            <div class="col-lg-9 col-md-9">
                <h2 class="title">Shopping cart</h2>
                <table class="items-list">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <!--Item-->
                    <tr class="item first">
                        <td class="thumb"><a href="itensDetalhe.html"><img src="{{asset('img/catalog/shopping-cart-thumb-1.jpg')}}" alt="Nikon D4S"/></a></td>
                        <td class="name"><a href="itensDetalhe.html">Nikon D4S</a></td>
                        <td class="price">715,00 $</td>
                        <td class="qnt-count">
                            <a class="incr-btn" href="#">-</a>
                            <input class="quantity form-control" type="text" value="2">
                            <a class="incr-btn" href="#">+</a>
                        </td>
                        <td class="total">2715,00 $</td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item">
                        <td class="thumb"><a href="itensDetalhe.html"><img src="{{asset('img/catalog/shopping-cart-thumb-2.jpg')}}" alt="Nikkor 11-27.5"/></a></td>
                        <td class="name"><a href="itensDetalhe.html">Nikkor</a></td>
                        <td class="price">715,00 $</td>
                        <td class="qnt-count">
                            <a class="incr-btn" href="#">-</a>
                            <input class="quantity form-control" type="text" value="2">
                            <a class="incr-btn" href="#">+</a>
                        </td>
                        <td class="total">2715,00 $</td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item">
                        <td class="thumb"><a href="itensDetalhe.html"><img src="{{asset('img/catalog/shopping-cart-thumb-1.jpg')}}" alt="Nikon D4S"/></a></td>
                        <td class="name"><a href="itensDetalhe.html">Nikon D4S</a></td>
                        <td class="price">715,00 $</td>
                        <td class="qnt-count">
                            <a class="incr-btn" href="#">-</a>
                            <input class="quantity form-control" type="text" value="2">
                            <a class="incr-btn" href="#">+</a>
                        </td>
                        <td class="total">2715,00 $</td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                    <!--Item-->
                    <tr class="item">
                        <td class="thumb"><a href="itensDetalhe.html"><img src="{{asset('img/catalog/shopping-cart-thumb-2.jpg')}}" alt="Nikkor 11-27.5"/></a></td>
                        <td class="name"><a href="itensDetalhe.html">Nikkor</a></td>
                        <td class="price">715,00 $</td>
                        <td class="qnt-count">
                            <a class="incr-btn" href="#">-</a>
                            <input class="quantity form-control" type="text" value="2">
                            <a class="incr-btn" href="#">+</a>
                        </td>
                        <td class="total">2715,00 $</td>
                        <td class="delete"><i class="icon-delete"></i></td>
                    </tr>
                </table>
            </div>

            <!--Sidebar-->
            <div class="col-lg-3 col-md-3">
                <h3>Cart totals</h3>
                <form class="cart-sidebar" method="post">
                    <div class="cart-totals">
                        <table>
                            <tr>
                                <td>Cart subtotal</td>
                                <td class="total align-r">2715,00 $</td>
                            </tr>
                            <tr class="devider">
                                <td>Shipping</td>
                                <td class="align-r">Free shipping</td>
                            </tr>
                            <tr>
                                <td>Order total</td>
                                <td class="total align-r">2715,00 $</td>
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-primary btn-sm btn-block" name="update-cart" value="Update shopping cart">
                        <input type="submit" class="btn btn-success btn-block" name="to-checkout" value="Proceed to checkout">
                    </div>
                    <h3>Have a coupon?</h3>
                    <div class="coupon">
                        <div class="form-group">
                            <label class="sr-only" for="coupon-code">Enter coupon code</label>
                            <input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="Enter coupon code">
                        </div>
                        <input type="submit" class="btn btn-primary btn-sm btn-block" name="apply-coupon" value="Apply coupon">
                    </div>
                    <a class="panel-toggle" href="#calc-shipping"><h3>Calculate shipping</h3></a>
                    <div class="hidden-panel calc-shipping" id="calc-shipping">
                        <div class="form-group">
                            <div class="select-style">
                                <select name="country">
                                    <option>Australia</option>
                                    <option>Belgium</option>
                                    <option>Germany</option>
                                    <option>United Kingdom</option>
                                    <option>Switzerland</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="state">State/ province</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State/ province">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="postcode">Postcode/ ZIP</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode/ ZIP">
                        </div>
                        <input type="submit" class="btn btn-primary btn-sm btn-block" name="update-totals" value="Update totals">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!--Shopping Cart Close-->
@include('catalogo')


@stop



