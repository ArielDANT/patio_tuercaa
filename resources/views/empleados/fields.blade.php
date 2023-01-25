<!-- Epl Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_nombres', 'Nombres:') !!}
    {!! Form::text('epl_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epl Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_apellidos', 'Apellidos:') !!}
    {!! Form::text('epl_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epl Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_cedula', 'Cedula:') !!}
    {!! Form::text('epl_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epl Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_direccion', 'Direccion:') !!}
    {!! Form::text('epl_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epl Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_correo', 'Correo:') !!}
    {!! Form::text('epl_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Epl Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_estado', 'Estado:') !!}
    {!! Form::select('epl_estado',['1'=>'Activo','0'=>'Inactivo'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancel</a>
</div>
