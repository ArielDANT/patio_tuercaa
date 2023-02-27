<div class="table-responsive-sm">
    <table class="table table-striped" id="inventarioDets-table">
        <thead>
            <tr>
                <th>Ive Id</th>
        <th>Veh Id</th>
        <th>Ivd Cantidad</th>
        <th>Ivd Vu</th>
        <th>Ivd Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventarioDets as $inventarioDet)
            <tr>
                <td>{{ $inventarioDet->ive_id }}</td>
            <td>{{ $inventarioDet->veh_id }}</td>
            <td>{{ $inventarioDet->ivd_cantidad }}</td>
            <td>{{ $inventarioDet->ivd_vu }}</td>
            <td>{{ $inventarioDet->ivd_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['inventarioDets.destroy', $inventarioDet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inventarioDets.show', [$inventarioDet->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('inventarioDets.edit', [$inventarioDet->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>