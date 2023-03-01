<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(document).on("blur","input[name=veh_id]", ()=>{
        //$("#mld_autos").modal("show");
        getAuto();        
    });
    async function getAuto(){
        url=window.location;
        const vehiculo=$("input[name=veh_id]").val();
        const reponse = await axios.post(url+"/busca_vehiculos", {vehiculo:vehiculo});
        
        const result=response.data;
        console.log(result);
    }
        //function(){}
        //()=>{}
</script>

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
    {!! Form::number('ivd_cantidad', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-4">
    <label for="">Vehiculos</label>
    {!! Form::text('veh_id', null, ['class' => 'form-control']) !!}
    </div>    
    <div class="col-md-4">

    <label for="">Valor Unitario</label>
    {!! Form::number('ivd_vu', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-4">
    <label for="">Estado</label>
    {!! Form::label('ivd_estado', 'Ivd Estado:') !!}
    {!! Form::select('ivd_estado',['NUEVO'=>'NUEVO', 'USADO'=>'USADO', 'ROBADO'=>'ROBADO'] ,null, ['class' => 'form-control']) !!}
    </div>            
</div>


</div>
<!-- Submit Field -->
<div class="container">
    <button type="submit" class="btn btn-primary" name="btn_guargar" value="btn_guardar"> <b>GUARDAR</b> </button>
</div>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="mld_autos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>