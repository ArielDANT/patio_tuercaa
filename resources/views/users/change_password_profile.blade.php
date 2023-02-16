@extends('layouts.app')
@section('content')
<h1>CAMBIAR CLAVE</h1>
<div class="container">
    <form action="{{route('change_password_profile')}}" method="POST">
    	@csrf
    
	<div class="row">
	    <div class="col-md-4">
	    <label for="nueva_clave">Nueva Clave</label>
	    <input type="text" id="nueva_clave" name="nueva_clave" class="form-control">
		</div>
	</div>
	<div class="row">
	<div class="col-md-4">
	    <label for="confirme_nueva_clave">Confirme Nueva Clave</label>
	    <input type="password" id="confirme_nueva_clave" name="confirme_nueva_clave"  class="form-control">
	    </div>
	</div>
	<div class="row">
	<div class="col-md-4">
	    <button type="submit" class="bg-red" id="btn_change" name="btn_change" value="btn_change"> GUARDAR</button>
	    </div>
	</div>
</form>
	
</div>
@endsection