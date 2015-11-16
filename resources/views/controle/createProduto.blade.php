@extends('master')

@section('conteudo')



    <div class="container">
        <h1>Novo Produto</h1>



        <div class="row">
        @if(isset($sucesso))
        @if($sucesso == true)
                <ul class="alert alert-success">
                    <li>Sucesso</li>
                </ul>

            @else
            <ul class="alert alert-warning">
                                <li>Ocorreu um erro no cadastro!</li>
                            </ul>

            @endif
            @endif

            @if($errors->any())

            @foreach($errors->all() as $erro)

            <ul>

            <li>{{ $erro }}</li>

            </ul>

            @endforeach

            @endif
            <div class="alert"><a href="{{ route('controle.index')  }}" class="btn btn-success">Voltar</a></div>


            {!! Form::open(['route'=>'controle.store', 'method'=>'post']) !!}


                 @include('controle.form')

         <div class="form-group">
             {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
             </div>
        </div>

        {!! Form::close() !!}

         </div>

@stop
