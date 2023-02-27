<div class="table-responsive-sm">
    <table class="table table-striped" id="inventarios-table">
        <thead>
            <tr>
                <th>Pro Id</th>
        <th>Ive Fecha</th>
        <th>Ive Documento</th>
        <th>Ive Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->pro_id }}</td>
            <td>{{ $inventario->ive_fecha }}</td>
            <td>{{ $inventario->ive_documento }}</td>
            <td>{{ $inventario->ive_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['inventarios.destroy', $inventario->ive_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inventarios.show', [$inventario->ive_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('inventarios.edit', [$inventario->ive_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>