@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('empresas.index') }}">Empresa</a>
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
                                 <strong>Detalles de la Empresa</strong>
                                  <a href="{{ route('empresas.index') }}" class="btn btn-light">Salir</a>
                             </div>
                             <div class="card-body">
                                 @include('empresas.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
