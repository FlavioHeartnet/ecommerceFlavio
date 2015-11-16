@extends('master')

@section('conteudo')
<div class="container">
    <div class="row">
        @if(isset($erros))

            <ul class="alert alert-warning">
                @foreach($erros as $erro)
                <li>
                    {{ $erro }}
                </li>
                @endforeach
            </ul>
            @endif


            <div class="col-md-4 col-sm-6 space-bottom">
                <div class="row">
                    <div class="col-md-3 col-sm-4 featured-icon"><i class="icon icon-boat"></i></div>
                    <div class="col-md-9 col-sm-8 text-center-mobile">
                        <h3>Bem vindo ao ecommerce</h3>
                        <p>Aproveite e boas compras.</p>
                    </div>
                </div>
            </div>
    </div>
</div>

    @stop