<!-- Pro Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_nombres', 'Nombres:') !!}
    {!! Form::text('pro_nombres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_apellidos', 'Apellidos:') !!}
    {!! Form::text('pro_apellidos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_direccion', 'Direccion:') !!}
    {!! Form::text('pro_direccion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_telefono', 'Telefono:') !!}
    {!! Form::text('pro_telefono', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_correo', 'Correo:') !!}
    {!! Form::text('pro_correo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_cedula', 'Cedula:') !!}
    {!! Form::text('pro_cedula', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_descripcion', 'Descripcion:') !!}
    {!! Form::text('pro_descripcion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pro Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_estado', 'Estado:') !!}
    {!! Form::text('pro_estado', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancel</a>
</div>
