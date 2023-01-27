<!-- Usu Usuario Field -->
<div class="form-group">
    {!! Form::label('usu_usuario', 'Usu Usuario:') !!}
    <p>{{ $users->usu_usuario }}</p>
</div>

<!-- Usu Perfil Field -->
<div class="form-group">
    {!! Form::label('usu_perfil', 'Usu Perfil:') !!}
    <p>{{ $users->usu_perfil }}</p>
</div>

<!-- Epl Id Field -->
<div class="form-group">
    {!! Form::label('epl_id', 'Epl Id:') !!}
    <p>{{ $users->epl_id }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $users->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $users->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $users->remember_token }}</p>
</div>

