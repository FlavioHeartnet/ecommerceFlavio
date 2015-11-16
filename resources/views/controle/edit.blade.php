@extends('master')

@section('conteudo')



    <div class="container">
        <h1>Editar Produto</h1>



                <?php
                     $categoria = $produto->categoria;

                     switch($categoria)
                     {

                        case 1: $texto = 'Guitarra';
                            break;

                        case 2: $texto = 'Violão';
                              break;
                        case 3: $texto = 'Controlador';
                              break;
                         case 4: $texto = 'Sintetizador';
                               break;
                        case 5: $texto='Arranjador';
                            break;
                        case 6: $texto='Bateria';
                            break;
                        case 7: $texto = 'Baixo';
                            break;
                        case 8: $texto = 'Amplificador';
                                break;
                         default: $texto = 'Valor incorreto';

                     }


                     ?>
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
            {!! Form::model($produto, ['route'=>['controle.update',$produto->id] , 'method'=>'put'])!!}

            @include('controle.form')

         <div class="form-group">
             {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
             </div>
        </div>

        {!! Form::close() !!}

         </div>

@stop
