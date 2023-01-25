<div class="table-responsive-sm">
    <table class="table table-striped" id="empleados-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Direccion</th>
        <th>Correo</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleados)
            <tr>
                <td>{{ $empleados->epl_nombres }}</td>
            <td>{{ $empleados->epl_apellidos }}</td>
            <td>{{ $empleados->epl_cedula }}</td>
            <td>{{ $empleados->epl_direccion }}</td>
            <td>{{ $empleados->epl_correo }}</td>
            <td>{{ $empleados->epl_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['empleados.destroy', $empleados->epl_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empleados.show', [$empleados->epl_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('empleados.edit', [$empleados->epl_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>