<!-- Pro Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_id', 'Pro Id:') !!}
    {!! Form::number('pro_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ive Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_fecha', 'Ive Fecha:') !!}
    {!! Form::text('ive_fecha', null, ['class' => 'form-control','id'=>'ive_fecha']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#ive_fecha').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Ive Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_documento', 'Ive Documento:') !!}
    {!! Form::text('ive_documento', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ive Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_estado', 'Ive Estado:') !!}
    {!! Form::number('ive_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Cancel</a>
</div>
