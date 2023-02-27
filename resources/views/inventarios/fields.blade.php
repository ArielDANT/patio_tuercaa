<div class="row">
    
<!-- Pro Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_id', 'Pro Id:') !!}
    {!! Form::select('pro_id', $proveedores, null, ['class' => 'form-control']) !!}
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

</div>

<div class="row">
    
<!-- Ive Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_documento', 'Ive Documento:') !!}
    {!! Form::text('ive_documento', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ive Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_estado', 'Ive Estado:') !!}
    {!! Form::select('ive_estado',['1'=>'Registrado', '0'=>'Anulado'] ,null, ['class' => 'form-control']) !!}
</div>

<div class="row">
    <div class="col-md-4">
    <label for="">Cantidad</label>
    {!! Form::number('ivd_cantidad', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <div class="col-md-4">
    <label for="">Vehiculos</label>
    {!! Form::number('veh_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>    
    <div class="col-md-4">
    <label for="">Valor Unitario</label>
    {!! Form::number('ivd_vu', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <div class="col-md-4">
    <label for="">Estado</label>
    {!! Form::text('ivd_estado', ['NUEVO'=>'NUEVO',
                                  'USADO'=>'USADO',
                                  'CHOCADO'=>'CHOCADO'], null, ['class' => 'form-control']) !!}
    </div>            
</div>


</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Cancel</a>
</div>

</div>