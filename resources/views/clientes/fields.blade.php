<!-- Cli Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_nombres', 'Nombres:') !!}
    {!! Form::text('cli_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_apellidos', 'Apellidos:') !!}
    {!! Form::text('cli_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_cedula', 'Cedula:') !!}
    {!! Form::text('cli_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_direccion', 'Direccion:') !!}
    {!! Form::text('cli_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_telefono', 'Telefono:') !!}
    {!! Form::text('cli_telefono', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_correo', 'Correo:') !!}
    {!! Form::text('cli_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cli Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cli_estado', 'Estado:') !!}
    {!! Form::text('cli_estado', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
