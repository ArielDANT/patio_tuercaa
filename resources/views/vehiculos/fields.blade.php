<!-- Emp Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emp_id', 'ID:') !!}
    {!! Form::select('emp_id',$empresas, null, ['class' => 'form-control']) !!}
</div>

<!-- Veh Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_marca', 'Marca:') !!}
    {!! Form::text('veh_marca', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Veh Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_modelo', 'Modelo:') !!}
    {!! Form::text('veh_modelo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Veh Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_anio', 'Año:') !!}
    {!! Form::number('veh_anio', null, ['class' => 'form-control']) !!}
</div>

<!-- Veh Kilometraje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_kilometraje', 'Kilometraje:') !!}
    {!! Form::number('veh_kilometraje', null, ['class' => 'form-control']) !!}
</div>

<!-- Veh Subtipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_subtipo', 'Subtipo:') !!}
    {!! Form::text('veh_subtipo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Veh Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_color', 'Color:') !!}
    {!! Form::text('veh_color', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Veh Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_estado', 'Estado:') !!}
    {!! Form::text('veh_estado', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
