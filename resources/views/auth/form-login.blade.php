
<div class="form-group group">
    {!! Form::label('email','Email') !!}
    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Digite seu email']) !!}

    <a class="help-link" href="#">Esqueceu email?</a>
</div>
<div class="form-group group">
    {!! Form::label('password','Senha') !!}
    <input type="password" id="password" name="password" class="form-control" placeholder="Digite a senha">

    <a class="help-link" href="#">Esqueceu a senha?</a>
</div>
<div class="checkbox">
    <label><input type="checkbox" name="remember"> Lembrar-me</label>
</div>

