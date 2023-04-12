<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  $(document).on("blur","input[name=veh_descripcion]", ()=>{
    $("#mld_autos").modal('show');
    getAuto();

  });

  $(document).on("click",".btn_select", function(){
       $("#mld_autos").modal('hide');
       const veh_id=$(this).attr('veh_id');
       getAutoById(veh_id);


  })

  async function getAutoById(veh_id){
    const url=window.location;
    const res=await axios.post(url+"/getautobyid",{veh_id:veh_id});
    const auto=res.data;
    $("input[name=veh_id]").val(auto.veh_id);
    $("input[name=veh_descripcion]").val(`${auto.veh_marca}${auto.veh_modelo}`);
    
    

  }

  async function getAuto(){
    const url=window.location;
    const vehiculo=$("input[name=veh_descripcion]").val();
    const response = await axios.post(url+"/busca_vehiculos",{vehiculo:vehiculo});
    const result=response.data;
    let tbl=`<table class='table'> <tr>
    <th>Marca</th> 
    <th>Modelo</th> 
    <th>Kilometraje</th> 
    <th>Año</th> 
    <th>Color</th> 
    <th>Subtipo</th> 
    <th></th> 
    </tr> 
    `;
    result.forEach((v)=>{
      tbl+=` <tr>
    <td>${v.veh_marca}</td>
    <td>${v.veh_modelo}</td>
    <td>${v.veh_kilometraje}</td>
    <td>${v.veh_anio}</td>
    <td>${v.veh_color}</td>
    <td>${v.veh_subtipo}</td>
    <td> <span class='btn btn-info btn-sm btn_select' veh_id='${v.veh_id}'>&#x2714;</span> </td>
    </tr>`;
      
    });

    tbl+=`</table>`;

      $("#datos").html(tbl);
    
  }

  $(document).on("click",".btn_delete",function(){
        const ivd_id=$(this).attr('ivd_id');
        alert(ivd_id);
  })

</script>

<div class="row">
  
<!-- Pro Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pro_id', 'Proveedor:') !!}
    {!! Form::select('pro_id',$proveedores ,null, ['class' => 'form-control']) !!}
</div>

<!-- Ive Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_fecha', 'Fecha:') !!}
    {!! Form::text('ive_fecha', null, ['class' => 'form-control','id'=>'ive_fecha']) !!}
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
</div>

<div class="row">
  
<!-- Ive Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_documento', 'Documento:') !!}
    {!! Form::text('ive_documento', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ive Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ive_estado', 'Estado:') !!}
    {!! Form::select('ive_estado',['1'=>'Registrado','0'=>'Anulado'] ,null, ['class' => 'form-control']) !!}
</div>

</div>

<div class="row">
  <div class="col-md-2">
    <label for="">Cantidad</label>
    {!! Form::number('ivd_cantidad' ,null, ['class' => 'form-control']) !!}
  </div>
  <div class="col-md-4">
    <label for="">Vehículos</label>
    {!! Form::hidden('veh_id' ,null, ['class' => 'form-control']) !!}
    {!! Form::text('veh_descripcion' ,null, ['class' => 'form-control']) !!}
  </div>
  <!--<div class="col-md-2">
    <label for="">V.U</label>
    {!! Form::number('ive_vu' ,null, ['class' => 'form-control']) !!}
  </div> -->
  <div class="col-md-2">
    <label for="">Estado</label>
    {!! Form::select('ivd_estado',['NUEVO'=>'NUEVO',
                              'USADO'=>'USADO',
                              'CHOCADO'=>'CHOCADO'],null, ['class' => 'form-control']) !!}
  </div>

<!-- botòn -->
<div class="row container mt-2">
  <button type="submit" class="btn btn-success" name="btn_guardar" value="btn_guardar">+</button>
</div>

<div class="container">
  <table class='table'> <tr>
    <th>#</th>  
    <th>Cant</th> 
    <th>Vehiculo</th> 
    <!--<th>Vu</th> --> 
    <th>Estado</th> 
    <!--<th>VT</th> -->
    </tr>
    @isset($detalle)
    @foreach($detalle as $dt)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$dt->ivd_cantidad}}</td>
      <td>{{$dt->veh_marca}} {{$dt->veh_color}}</td>
      <!--<td>{{$dt->ivd_vu}}</td> -->
      <td>{{$dt->ivd_estado}}</td>
      <!--<td>{{ ($dt->ivd_cantidad*$dt->ivd_vu) }}</td> -->
      <td>
        {!! Form::open(['route' => ['inventarios.destroy', $inventario->ive_id], 'method' => 'delete']) !!}
            <i ivd_id="{{dt->ivd_id}}"
              class="btn btn-danger btn-sm btn_delete fa fa-trash"></i>
            {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endisset
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="mld_autos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Vehiculos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="datos">
        
      </div>
     
    </div>
  </div>
</div>