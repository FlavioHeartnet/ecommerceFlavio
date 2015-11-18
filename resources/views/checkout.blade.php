@extends('master')

@section('conteudo')
<section class="checkout">
    <div class="container">

        <!--Expandable Panels-->
        <div class="row">
            <div class="col-lg-12">
                <h2>Checkout</h2>
                <!--Hidden Panels-->
                <a class="panel-toggle" href="#login"><i></i>Já é cadastrado, faça seu login</a>
                <div class="row">
                    <div class="hidden-panel" id="login">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-7">

                                        {!! Form::open(['url'=>'auth/login']) !!}

                                          @include('auth.form-login')

                                         <input class="btn btn-success" type="submit" value="Login">
                                        {!! Form::close() !!}


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <a class="panel-toggle" href="#coupon"><i></i>Tem um cupom? coloque aqui</a>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hidden-panel" id="coupon">
                            <form name="coupon-code" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="coupon-code">Digite o codigo</label>
                                    <input type="text" class="form-control" id="coupon-code" name="coupon-code" placeholder="Enter coupon code">
                                </div>
                                <input type="submit" class="btn btn-primary btn-sm btn-block" name="apply-coupon" value="Apply coupon">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Checkout Form-->
        <div class="row">
            {!! Form::open(['route'=>'finalizar', 'method'=>'post']) !!}

                <!--Left Column-->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h3>Seu endereço</h3>
                    <div class="form-group">
                        <label for="co-country">País *</label>
                        <div class="select-style">
                            <select name="co-country" id="co-country">
                                <option>Brasil</option>
                                <option>Alemanha</option>
                                <option>USA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co-first-name">Nome *</label>
                            <input type="text" class="form-control" id="co-first-name" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co-last-name">Sobrenome *</label>
                            <input type="text" class="form-control" id="co-last-name" name="sobrenome" placeholder="Sobrenome" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="co-company-name">Sua Empresa</label>
                        <input type="text" class="form-control" id="co-company-name" name="empresa" placeholder="Empresa">
                    </div>
                    <div class="form-group">
                        <label for="co-str-adress">Endereço *</label>
                        <input type="text" class="form-control" id="co-str-adress" name="endereco" placeholder="Endereço" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="co-appartment">Complemento</label>
                        <input type="text" class="form-control" id="co-appartment" name="apartamento" placeholder="Complemento" required>
                    </div>
                    <div class="form-group">
                        <label for="co-city">Cidade *</label>
                        <input type="text" class="form-control" id="co-city" name="cidade" placeholder="Cidade" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co-state">Estado</label>
                            <input type="text" class="form-control" id="co-state" name="estado" placeholder="Estado">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co_postcode">CEP *</label>
                            <input type="text" class="form-control" id="co_postcode" name="cep" placeholder="CEP" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co-email">Email *</label>
                            <input type="email" class="form-control" id="co-email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="co_phone">Telefone *</label>
                            <input type="text" class="form-control" id="co_phone" name="tel" placeholder="Seu telefone" required>
                        </div>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" name="create-account"> Criar nova conta?</label>
                    </div>

                    <h3>Observações</h3>
                    <div class="form-group">
                        <label class="sr-only" for="order-notes">Observações</label>
                        <textarea class="form-control" name="order-notes" id="order-notes" rows="4" placeholder="Observações"></textarea>
                    </div>
                </div>

                <!--Right Column-->
                @include('compras')
            {!! Form::close() !!}
        </div>
    </div>
</section>

@include('tab-precos')

@stop