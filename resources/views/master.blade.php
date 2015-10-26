<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Minha loja</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
    <meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
    <meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="http://the8guild.com/themes/html/bushido/v1.3/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://the8guild.com/themes/html/bushido/v1.3/favicon.ico" type="image/x-icon">
    <!--Master Slider Styles-->
    <link href="{{ asset('masterslider/style/masterslider.css') }}" rel="stylesheet" media="screen">
    <!--Styles-->
    <link href="{{ asset('css/styles.css')  }}" rel="stylesheet" media="screen">
    <!--Color Scheme-->
    <link class="color-scheme" href="{{ asset('css/styles.css')  }}" rel="stylesheet" media="screen">
    <!--Color Switcher-->

    <!--Modernizr-->
    <script src="{{ asset('js/libs/modernizr.custom.js')  }}"></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>

    <![endif]-->


</head>

<!--Body-->
<body>



<!--Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h2>Login or <a href="register">Register</a></h2>
                <p class="large">Use social accounts</p>
                <div class="social-login">
                    <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                    <a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form class="login-form">
                    <div class="form-group group">
                        <label for="log-email">Email</label>
                        <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Enter your email" required>
                        <a class="help-link" href="#">esqueceu email?</a>
                    </div>
                    <div class="form-group group">
                        <label for="log-password">senha</label>
                        <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Enter your password" required>
                        <a class="help-link" href="#">Esqueceu a senha?</a>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Lembrar-me</label>
                    </div>
                    <input class="btn btn-success" type="submit" value="Login">
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Header-->
<header data-offset-top="500" data-stuck="600"><!--data-offset-top is when header converts to small variant and data-stuck when it becomes visible. Values in px represent position of scroll from top. Make sure there is at least 100px between those two values for smooth animation-->

    <!--Search Form-->
    <form class="search-form closed" method="get" role="form" autocomplete="off">
        <div class="container">
            <div class="close-search"><i class="icon-delete"></i></div>
            <div class="form-group">
                <label class="sr-only" for="search-hd">Search for procuct</label>
                <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Search for procuct">
                <button type="submit"><i class="icon-magnifier"></i></button>
            </div>
        </div>
    </form>

    <!--Split Background-->
    <div class="left-bg"></div>
    <div class="right-bg"></div>

    <div class="container">
        <a class="logo" href="/"><img src="{{asset('img/logo.png')}}" alt="Bushido"/></a>

        <!--Language / Currency Switchers-->
        <ul class="switchers">
            <li>R$

            <li>Br

            </li>
        </ul>

        <!--Mobile Menu Toggle-->
        <div class="menu-toggle"><i class="fa fa-list"></i></div>
        <div class="mobile-border"><span></span></div>

        <!--Main Menu-->
        <nav class="menu">
            <ul class="main">
                <li class="has-submenu"><a href="/">Home<i class="fa fa-chevron-down"></i></a><!--Class "has-submenu" for proper highlighting and dropdown-->

                </li>
                <li class="has-submenu"><a href="filtros">Shop<i class="fa fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="filtros">Nossos Produtos</a></li>
                        <li><a href="checkout">Checkout</a></li>
                        <li><a href="lista-desejos">Lista de desejos</a></li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="#">Pages<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="cadastro">Login / Cadastro</a></li>
                        <li><a href="/userInfo">Minhas informações<span class="label">NEW</span></a></li>
                        <li><a href="endereco">Meus endereços<span class="label">NEW</span></a></li>
                        <li><a href="/historico">Historico de compras<span class="label">NEW</span></a></li>
                        <li><a href="/regras">Nossas regras de envio<span class="label">NEW</span></a></li>
                        <li><a href="/contatos">Contatos</a></li>

                    </ul>
                </li>
                <li class="hide-sm"><a href="/suporte">Suporte</a></li>
            </ul>
            <ul class="catalog">
                <li class="has-submenu"><a href="/filtros">Phones<i class="fa fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Nokia</a></li>
                        <li class="has-submenu"><a href="#">iPhone</a><!--Class "has-submenu" for adding carret and dropdown-->
                            <ul class="sub-submenu">
                                <li><a href="#">iPhone 4</a></li>
                                <li><a href="#">iPhone 4s</a></li>
                                <li><a href="#">iPhone 5c</a></li>
                                <li><a href="#">iPhone 5s</a></li>
                            </ul>
                        </li>
                        <li><a href="#">HTC</a></li>
                        <li class="has-submenu"><a href="#">Samsung</a>
                            <ul class="sub-submenu">
                                <li><a href="#">Galaxy Note 3</a></li>
                                <li><a href="#">Galaxy S5</a></li>
                                <li><a href="#">Galaxy S3 Neo</a></li>
                                <li><a href="#">Galaxy Gear</a></li>
                                <li><a href="#">Galaxy S Duos 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">BlackBerry</a></li>
                        <li class="offer">
                            <div class="col-1">
                                <p class="p-style2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{asset('img/offers/menu-drodown-offer.jpg')}}" alt="Special Offer"/>
                                <a class="btn btn-block" href="#"><span>584$</span>Special offer</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="/filtros">Cameras</a></li>
                <li><a href="/filtros">Personal computers</a></li>
                <li><a href="/filtros">Gaming consoles</a></li>
                <li><a href="/filtros">TV sets</a></li>
            </ul>
        </nav>

        <!--Toolbar-->
        <div class="toolbar group">
            <button class="search-btn btn-outlined-invert"><i class="icon-magnifier"></i></button>
            <div class="middle-btns">
                <a class="btn-outlined-invert" href="/lista-desejos"><i class="icon-heart"></i> <span>Desejos</span></a>
                <a class="login-btn btn-outlined-invert" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i> <span>Login</span></a>
            </div>
            <div class="cart-btn">
                <a class="btn btn-outlined-invert" href="/carrinho"><i class="icon-shopping-cart-content"></i><span>3</span></a>

                <!--Cart Dropdown-->
                <div class="cart-dropdown">
                    <span></span><!--Small rectangle to overlap Cart button-->
                    <div class="body">
                        <table>
                            <tr>
                                <th>Items</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <tr class="item">
                                <td><div class="delete"></div><a href="#">Good Joo-Joo Surfb</a></td>
                                <td><input type="text" value="1"></td>
                                <td class="price">89 005 $</td>
                            </tr>
                            <tr class="item">
                                <td><div class="delete"></div><a href="#">Good Joo-Joo Item</a></td>
                                <td><input type="text" value="2"></td>
                                <td class="price">4 300 $</td>
                            </tr>
                            <tr class="item">
                                <td><div class="delete"></div><a href="#">Good Joo-Joo</a></td>
                                <td><input type="text" value="5"></td>
                                <td class="price">84 $</td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer group">
                        <div class="buttons">
                            <a class="btn btn-outlined-invert" href="/checkout"><i class="icon-download"></i>Checkout</a>
                            <a class="btn btn-outlined-invert" href="/carrinho"><i class="icon-shopping-cart-content"></i>Carrinho de compra</a>
                        </div>
                        <div class="total">93 389 $</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="page-content">

    @yield('conteudo')

 <!--Brands Carousel Widget-->
 <section class="brand-carousel">
     <div class="container">
         <h2>Nossos Valores</h2>
         <div class="inner">
             <a class="item" href="#"><img src="{{asset('img/brands/jquery.png')}}" alt="jQuery"/></a>
             <a class="item" href="#"><img src="{{asset('img/brands/wp.png')}}" alt="WordPress"/></a>
             <a class="item" href="#"><img src="{{asset('img/brands/android.png')}}" alt="Android"/></a>
             <a class="item" href="#"><img src="{{asset('img/brands/macgasm.png')}}" alt="Macgasm"/></a>
             <a class="item" href="#"><img src="{{asset('img/brands/dropbox.png')}}" alt="Dropbox"/></a>
         </div>
     </div>
 </section><!--Brands Carousel Close-->

</div><!--Page Content Close-->

<!--Sticky Buttons-->
<div class="sticky-btns">
    <form class="quick-contact ajax-form" method="post" name="quick-contact">
        <h3>Contact us</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
        <div class="form-group">
            <label for="qc-name">Seu nome</label>
            <input class="form-control input-sm" type="text" name="name" id="qc-name" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="qc-email">Email</label>
            <input class="form-control input-sm" type="email" name="email" id="qc-email" placeholder="Digite o  email">
        </div>
        <div class="form-group">
            <label for="qc-message">Sua mensagem</label>
            <textarea class="form-control input-sm" name="message" id="qc-message" placeholder="Digite sua mensagem"></textarea>
        </div>
        <!-- Validation Response -->
        <div class="response-holder"></div>
        <!-- Response End -->
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Send">
    </form>
    <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
    <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
</div><!--Sticky Buttons Close-->

<!--Subscription Widget-->
<section class="subscr-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-8">
                <h2 class="light-color">Subscribe to our news</h2>

                <!--Mail Chimp Subscription Form-->
                <form class="subscr-form" role="form" action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=d704057a31" target="_blank" method="post" autocomplete="off">
                    <div class="form-group">
                        <label class="sr-only" for="subscr-name">Enter name</label>
                        <input type="text" class="form-control" name="FNAME" id="subscr-name" placeholder="Enter name" required>
                        <button class="subscr-next"><i class="icon-arrow-right"></i></button>
                    </div>
                    <div class="form-group fff" style="display: none">
                        <label class="sr-only" for="subscr-email">Enter email</label>
                        <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Enter email" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_d704057a31" tabindex="-1" value=""></div>
                        <button type="submit" id="subscr-submit"><i class="icon-check"></i></button>
                    </div>
                </form>
                <!--Mail Chimp Subscription Form Close-->
                <p class="p-style2">Please fill the field before continuing</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1">
                <p class="p-style3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
    </div>
</section><!--Subscription Widget Close-->

<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="info">
                    <a class="logo" href="/"><img src="{{asset('img/logo.png')}}" alt="Bushido"/></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <div class="social">
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-tumblr-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h2>Latest news</h2>
                <ul class="list-unstyled">
                    <li>25 May <a href="#">Nemo enim ipsam voluptatem</a></li>
                    <li>01 May <a href="#">Neque porro quisquam est</a></li>
                    <li>16 Apr <a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li>10 Jan <a href="#">Sed ut perspiciatis unde</a></li>
                </ul>
            </div>
            <div class="contacts col-lg-3 col-md-3 col-sm-3">
                <h2>Contacts</h2>
                <p class="p-style3">
                    4120 Lenox Avenue, New York, NY,<br/>
                    10035 76 Saint Nicholas Avenue<br/>
                    <a href="mailto:mail@bushido.com">mail@bushido.com</a><br/>
                    +48 543765234<br/>
                    +48 555 234 54 34<br/>
                </p>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <p>&copy; 2014 BUSHIDO. All Rights Reserved. Designed by <a href="http://8guild.com/" target="_blank">8Guild</a></p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="payment">
                        <img src="{{asset('img/payment/visa.png')}}" alt="Visa"/>
                        <img src="{{asset('img/payment/paypal.png')}}" alt="PayPal"/>
                        <img src="{{asset('img/payment/master.png')}}" alt="Master Card"/>
                        <img src="{{asset('img/payment/discover.png')}}" alt="Discover"/>
                        <img src="{{asset('img/payment/amazon.png')}}" alt="Amazon"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--Footer Close-->

<!--Javascript (jQuery) Libraries and Plugins-->
<script src="{{asset('js/libs/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/libs/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/smoothscroll.js')}}"></script>
<script src="{{asset('js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/plugins/icheck.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/plugins/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.touchSwipe.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('js/plugins/lightGallery.min.js')}}"></script>
<script src="{{asset('js/plugins/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/plugins/masterslider.min.js')}}"></script>
<script src="{{asset('mailer/mailer.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>


<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966923546/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body><!--Body Close-->
</html>
