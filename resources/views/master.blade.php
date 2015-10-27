<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ForMusician by: Flavio</title>
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive HTML5 E-Commerce Template" />
    <meta name="keywords" content="responsive html5 template, e-commerce, shop, bootstrap 3.0, css, jquery, flat, modern" />
    <meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
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
                <h2>Login or <a href="cadastro">Cadastre-se</a></h2>
                <p class="large">Conecte-se com facebook</p>
                <div class="social-login">
                    <a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form class="login-form">
                    <div class="form-group group">
                        <label for="log-email">Email</label>
                        <input type="email" class="form-control" name="log-email" id="log-email" placeholder="Digite seu email" required>
                        <a class="help-link" href="#">esqueceu email?</a>
                    </div>
                    <div class="form-group group">
                        <label for="log-password">senha</label>
                        <input type="text" class="form-control" name="log-password" id="log-password" placeholder="Digite sua senha" required>
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
                <label class="sr-only" for="search-hd">Pesquise produtos aqui</label>
                <input type="text" class="form-control" name="search-hd" id="search-hd" placeholder="Pesquisar produtos">
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
                <li class="has-submenu"><a href="#">Administração<span class="label">NEW</span><i class="fa fa-chevron-down"></i></a>
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
                <li class="has-submenu"><a href="/filtros">Cordas<i class="fa fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Guitarras</a></li>
                        <li class="has-submenu"><a href="#">Violão</a><!--Class "has-submenu" for adding carret and dropdown-->
                            <ul class="sub-submenu">
                                <li><a href="#">Aço</a></li>
                                <li><a href="#">Nylon</a></li>
                                <li><a href="#">12 cordas</a></li>
                                <li><a href="#">Banjo</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Baixo</a></li>
                        <li><a href="#">Amplificador</a></li>
                        <li class="offer">
                            <div class="col-1">
                                <p class="p-style2">Escolha qual tipo de instrumento de corda voçê deseja e boas compras.</p>
                            </div>
                            <div class="col-2">
                                <img src="{{asset('img/offers/violao.png')}}" alt="Special Offer"/>
                                <a class="btn btn-block" href="#"><span>R$ 582</span>Oferta especial</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="/filtros">Teclas</a></li>

                <li><a href="/filtros">Percussão</a></li>

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
                                <td><div class="delete"></div><a href="#">Martin Anniversary 100th</a></td>
                                <td><input type="text" value="1"></td>
                                <td class="price">R$ 89 005</td>
                            </tr>
                            <tr class="item">
                                <td><div class="delete"></div><a href="#">Taylor CE101</a></td>
                                <td><input type="text" value="2"></td>
                                <td class="price">R$ 4 300</td>
                            </tr>
                            <tr class="item">
                                <td><div class="delete"></div><a href="#">Afinador TS mini</a></td>
                                <td><input type="text" value="5"></td>
                                <td class="price">R$ 84</td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer group">
                        <div class="buttons">
                            <a class="btn btn-outlined-invert" href="/checkout"><i class="icon-download"></i>Checkout</a>
                            <a class="btn btn-outlined-invert" href="/carrinho"><i class="icon-shopping-cart-content"></i>Carrinho de compra</a>
                        </div>
                        <div class="total">R$ 93 389</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="page-content">

    @yield('conteudo')

 <!--Brands Carousel Widget
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
        <h3>Fale com nossos atendendentes</h3>
        <p class="text-muted">Estamos aqui prontos para atende-lo.</p>
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
        <input class="btn btn-success btn-sm btn-block" type="submit" value="Enviar">
    </form>
    <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
    <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
</div><!--Sticky Buttons Close-->

<!--Subscription Widget-->


<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="info">
                    <a class="logo" href="/"><img src="{{asset('img/logo.png')}}" alt="Bushido"/></a>
                    <p> Temos os melhores preços do mercado, garantia de qualidade e comprometimento com você</p>
                    <div class="social">
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h2>Noticias</h2>
                <ul class="list-unstyled">
                    <li>25 Maio <a href="#">Ofertas incriveis nos nossos pianos</a></li>
                    <li>01 Maio <a href="#">Loja fisica inaugurada</a></li>
                    <li>16 Abril <a href="#">Reduzimos para 0 o indice de reclamações no reclameAqui</a></li>
                    <li>10 Janeiro <a href="#">Novos produtos aqui!</a></li>
                </ul>
            </div>
            <div class="contacts col-lg-3 col-md-3 col-sm-3">
                <h2>Contaos</h2>
                <p class="p-style3">
                    Avenida bacabal nº 115, São Jose dos Campos<br/>
                    São Paulo<br/>
                    <a href="mailto:mail@bushido.com">Contato@minhaLoja.com</a><br/>
                    +48 543765234<br/>

                </p>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <p>&copy; 2015 Todos os direitos reservados desenvolvido por <a href="http://8guild.com/" target="_blank">Flavio</a></p>
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
