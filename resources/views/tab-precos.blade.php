<!--Tabs Widget-->
<section class="tabs-widget">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#bestsel" data-toggle="tab">Itens Bestseller</a></li>
        <li><a href="#onsale" data-toggle="tab">Itens a venda</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="bestsel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                    @if(isset($produtos[0]))
                        <a class="media-link" href="#">
                            <div class="overlay">
                                <div class="descr"><div>{{ $produtos[0]->nome  }}<span>R$ {{ $produtos[0]->valor  }}</span></div></div>
                            </div>
                            <img src="{{asset('img/media/'.$produtos[0]->foto) }}" alt="1"/>
                        </a>
                        @endif
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                    @if(isset($produtos[1]))
                        <a class="media-link" href="#">

                            <div class="overlay">

                                <div class="descr"><div>{{ $produtos[1]->nome  }}<span>R$ {{ $produtos[1]->valor  }}</span></div></div>

                            </div>
                            <img src="{{asset('img/media/'.$produtos[1]->foto) }}" alt="2"/>
                            @endif
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                    @if(isset($produtos[2]))
                        <a class="media-link" href="#">
                            <div class="overlay">
                                <div class="descr"><div>{{ $produtos[2]->nome  }}<span>R$ {{ $produtos[2]->valor  }}</span></div></div>
                            </div>
                            <img src="{{asset('img/media/'.$produtos[2]->foto) }}" alt="3"/>
                        </a>
                        @endif
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                    @if(isset($produtos[3]))
                        <a class="media-link" href="#">
                            <div class="overlay">
                                <div class="descr"><div>{{ $produtos[3]->nome  }}<span>R$ {{ $produtos[3]->valor  }}</span></div></div>
                            </div>
                            <img src="{{asset('img/media/'.$produtos[3]->foto) }}" alt="4"/>
                        </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="onsale">
            <div class="container">

                <div class="row">



                    <div class="col-lg-4 col-md-4 col-sm-4">
                    @if(isset($produtos[0]))
                        <a class="media-link" href="#">
                            <div class="overlay">
                                <div class="descr"><div>{{$produtos[0]->nome}}<span>R$ {{ $produtos[0]->valor  }}</span></div></div>
                            </div>
                            <img src="{{asset('img/media/'.$produtos[0]->foto)}}" alt="6"/>
                        </a>
                        @endif
                    </div>

                     <div class="col-lg-4 col-md-4 col-sm-4">
                                @if(isset($produtos[1]))
                                            <a class="media-link" href="#">
                                                <div class="overlay">
                                                    <div class="descr"><div>{{$produtos[1]->nome}}<span>R$ {{ $produtos[1]->valor  }}</span></div></div>
                                                </div>
                                                <img src="{{asset('img/media/'.$produtos[1]->foto)}}" alt="6"/>
                                            </a>
                                            @endif
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                        @if(isset($produtos[2]))
                                            <a class="media-link" href="#">
                                               <div class="overlay">
                                                <div class="descr"><div>{{$produtos[2]->nome}}<span>R$ {{ $produtos[2]->valor  }}</span></div></div>
                                                </div>
                                                <img src="{{asset('img/media/'.$produtos[2]->foto)}}" alt="6"/>
                                                </a>

                                                @endif
                                                </div>

                </div>
                                 <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    @if(isset($produtos[3]))
                                        <a class="media-link" href="#">
                                            <div class="overlay">
                                                <div class="descr"><div>{{$produtos[3]->nome}}<span>R$ {{ $produtos[3]->valor  }}</span></div></div>
                                            </div>
                                            <img src="{{asset('img/media/'.$produtos[3]->foto)}}" alt="6"/>
                                        </a>
                                        @endif
                                    </div>

                                     <div class="col-lg-4 col-md-4 col-sm-4">
                                        @if(isset($produtos[4]))
                                                            <a class="media-link" href="#">
                                                                <div class="overlay">
                                                                    <div class="descr"><div>{{$produtos[4]->nome}}<span>R$ {{ $produtos[4]->valor  }}</span></div></div>
                                                                </div>
                                                                <img src="{{asset('img/media/'.$produtos[4]->foto)}}" alt="6"/>
                                                            </a>
                                                            @endif
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                        @if(isset($produtos[5]))
                                                            <a class="media-link" href="#">
                                                               <div class="overlay">
                                                                <div class="descr"><div>{{$produtos[5]->nome}}<span>R$ {{ $produtos[5]->valor  }}</span></div></div>
                                                                </div>
                                                                <img src="{{asset('img/media/'.$produtos[5]->foto)}}" alt="6"/>
                                                                </a>
                                                                @endif
                                                        </div>

                                </div>


                            </div>


            </div>

        </div>
    </div>
</section>