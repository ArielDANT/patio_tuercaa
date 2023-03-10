<div class="table-responsive-sm">
    <table class="table table-striped" id="users-table">
        <thead>
            <tr>
                <th>Usuario</th>
        <th>Perfil</th>
        <th>Empleado</th>
        <!--<th>Email Verified At</th> -->
        <th>Password</th>
        <!--<th>Token</th> -->
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
            <td>{{ $users->usu_usuario }}</td>
            <td>{{ $users->usu_perfil }}</td>
            <td>{{ $users->epl_nombres }}</td>
            <!--<td>{{ $users->email_verified_at }}</td> -->
            <td>{{ $users->password }}</td>
            <!--<td>{{ $users->remember_token }}</td> -->
                <td>
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}" class='btn btn-ghost-success'><i class="fa fa-key"></i></a>
                        <a href="{{ route('users.edit', [$users->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
