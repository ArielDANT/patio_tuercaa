<div class="table-responsive-sm">
    <table class="table table-striped" id="clientes-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Estado</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $clientes)
            <tr>
                <td>{{ $clientes->cli_nombres }}</td>
            <td>{{ $clientes->cli_apellidos }}</td>
            <td>{{ $clientes->cli_cedula }}</td>
            <td>{{ $clientes->cli_direccion }}</td>
            <td>{{ $clientes->cli_telefono }}</td>
            <td>{{ $clientes->cli_correo }}</td>
            <td>{{ $clientes->cli_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['clientes.destroy', $clientes->cli_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$clientes->cli_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clientes.edit', [$clientes->cli_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>