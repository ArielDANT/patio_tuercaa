<!-- Usu Usuario Field -->
<div class="form-group">
    {!! Form::label('usu_usuario', 'Usuario:') !!}
    <p>{{ $users->usu_usuario }}</p>
</div>

<!-- Usu Perfil Field -->
<div class="form-group">
    {!! Form::label('usu_perfil', 'Perfil:') !!}
    <p>{{ $users->usu_perfil }}</p>
</div>

<!-- Epl Id Field -->
<div class="form-group">
    {!! Form::label('epl_id', 'Nombres:') !!}
    <p>{{ $users->epl_id }}</p>
</div>

<!-- Email Verified At Field -->
<!-- <div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $users->email_verified_at }}</p>
</div> -->

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $users->password }}</p>
</div>

<!-- Remember Token Field -->
<!--<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $users->remember_token }}</p>
</div> -->

<!-- Usu Perfil Field -->
<form action="{{route('change_password')}}" method="POST">
    @csrf
    <input type="text" name="usu_id" value="{{ $users->id }}">
<div class="form-group">
    {!! Form::label('new_password', 'Nueva Clave:') !!}
    <!--{!! Form::password('new_pasword', null, ['class' => 'form-control', 'maxlength' => 15]) !!}-->
    <input type="password" class="form-control" name="new_password" id="new_password">
</div>

<div class="form-group">
    {!! Form::label('confirm_new_password', 'Confirme Nueva Clave:') !!}
    <!--{!! Form::password('confirm_new_pasword', null, ['class' => 'form-control', 'maxlength' => 15]) !!}-->
    <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-ghost-success"> Guardar</button>
</div>
</form>