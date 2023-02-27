<!-- Ive Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_id', 'Ive Id:') !!}
    {!! Form::number('ive_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Veh Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('veh_id', 'Veh Id:') !!}
    {!! Form::number('veh_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ivd Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ivd_cantidad', 'Ivd Cantidad:') !!}
    {!! Form::number('ivd_cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ivd Vu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ivd_vu', 'Ivd Vu:') !!}
    {!! Form::number('ivd_vu', null, ['class' => 'form-control']) !!}
</div>

<!-- Ivd Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ivd_estado', 'Ivd Estado:') !!}
    {!! Form::text('ivd_estado', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inventarioDets.index') }}" class="btn btn-secondary">Cancel</a>
</div>
