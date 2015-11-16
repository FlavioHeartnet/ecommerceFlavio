@extends('master')

@section('conteudo')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Seus dados</li>
</ol>

<section>
    <div class="container">
        <div class="row space-top">

            <!--Items List-->
            <div class="col-sm-8 space-bottom">
                <h2 class="title">Minha Conta</h2>
                <ul class="list-unstyled space-bottom">
                    <li><a class="large" href="endereco">Meus endereços</a></li>
                    <li><a class="large" href="historico">Hiscorico de Compra</a></li>
                    <li><a class="large" href="lista-desejos">Minha lista de desejo</a></li>
                </ul>
                <h3>Informações pessoais</h3>
                <p>Altere aqui seus dados, para nos manter atualizados.</p>
                <div class="row">
                    <form class="col-md-12 personal-info" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_first_name">Nome</label>
                                <input type="text" class="form-control" name="nome" id="api_first_name" placeholder="Digite seu nome" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_last_name">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" id="api_last_name" placeholder="Digite o sobrenome" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_email">Email</label>
                                <input type="email" class="form-control" name="email" id="api_email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_phone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="api_phone" placeholder="Digite seu telefone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_password">Senha</label>
                                <input type="password" class="form-control" name="password" id="api_password" placeholder="Sua senha" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_conf_password">Confirmar senha</label>
                                <input type="password" class="form-control" name="conf_password" id="api_conf_password" placeholder="Confirme sua senha" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox custom">
                                <label>
                                    <input type="checkbox">Deseja receber nossa newsletter?
                                </label>
                            </div>
                            <div class="checkbox custom">
                                <label>
                                    <input type="checkbox">Deseja receber ofertas especiais.
                                </label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
            </div>

            <!--Sidebar-->
            @include('compras')
        </div>
    </div>
</section>

@include('catalogo')

@stop