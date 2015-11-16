<div class="form-group">
             {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('estoque', 'Estoque:') !!}
            {!! Form::text('estoque', null, ['class'=>'form-control']) !!}
        </div>
            <div class="form-group">
                <label id="categoria">
                    <select name="categoria" class="form-control dropdown">

                    @if(isset($texto) and isset($produto->categoria))

                        <option value="{{$produto->categoria}}">{{ $texto }}</option>

                    @endif

                        <option value="1">Guitarra</option>
                        <option value="2">Violão</option>
                        <option value="3">Controlador</option>
                        <option value="4">Sintetizador</option>
                        <option value="5">Arranjador</option>
                        <option value="6">Bateria</option>
                        <option value="7">Baixo</option>
                        <option value="8">Amplificador</option>

                    </select>
                </label>
            </div>

        <div class="form-group">
            {!! Form::label('foto', 'Foto:') !!}
            {!! Form::file('foto', null, ['class'=>'form-control']) !!}
        </div>


        <!-- Descricao Form Input -->



            <div class="form-group">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!!Form::textarea('descricao', null, ['class'=>'form-control']) !!}
                  </div>