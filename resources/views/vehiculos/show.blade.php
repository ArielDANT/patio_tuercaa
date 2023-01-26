@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('vehiculos.index') }}">Vehiculos</a>
            </li>
            <li class="breadcrumb-item active">Detalles</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles del Vehiculo</strong>
                                  <a href="{{ route('vehiculos.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('vehiculos.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
