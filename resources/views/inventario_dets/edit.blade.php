@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('inventarioDets.index') !!}">Inventario Det</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Inventario Det</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($inventarioDet, ['route' => ['inventarioDets.update', $inventarioDet->id], 'method' => 'patch']) !!}

                              @include('inventario_dets.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection