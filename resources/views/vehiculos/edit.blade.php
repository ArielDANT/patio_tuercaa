@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('vehiculos.index') !!}">Vehiculos</a>
          </li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar un Vehiculo</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($vehiculos, ['route' => ['vehiculos.update', $vehiculos->veh_id], 'method' => 'patch']) !!}

                              @include('vehiculos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection