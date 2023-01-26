<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedores-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Cedula</th>
        <th>Descripcion</th>
        <th>Estado</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedores)
            <tr>
                <td>{{ $proveedores->pro_nombres }}</td>
            <td>{{ $proveedores->pro_apellidos }}</td>
            <td>{{ $proveedores->pro_direccion }}</td>
            <td>{{ $proveedores->pro_telefono }}</td>
            <td>{{ $proveedores->pro_correo }}</td>
            <td>{{ $proveedores->pro_cedula }}</td>
            <td>{{ $proveedores->pro_descripcion }}</td>
            <td>{{ $proveedores->pro_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['proveedores.destroy', $proveedores->pro_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedores.show', [$proveedores->pro_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('proveedores.edit', [$proveedores->pro_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>