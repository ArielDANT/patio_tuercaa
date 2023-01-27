<!-- Epl Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('epl_id', 'Epl Id:') !!}
    {!! Form::select('epl_id',$empleados , null, ['class' => 'form-control']) !!}
</div>
<!-- Usu Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usu_usuario', 'Usu Usuario:') !!}
    {!! Form::text('usu_usuario', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Usu Perfil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usu_perfil', 'Usu Perfil:') !!}
    {!! Form::select('usu_perfil',
    ['ADMINISTRADOR'=>'ADMINISTRADOR',
    'VENDEDOR'=>'VENDEDOR',
    'CONTADOR'=>'CONTADOR',
    'MECÁNICO'=>'MECÁNICO'
    ],
    null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Email Verified At Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div> -->

@push('scripts')
   <script type="text/javascript">
           $('#email_verified_at').datetimepicker({
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


<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Remember Token Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
</div>
