<div class="table-responsive">
    <table class="table" id="produccions-table">
        <thead>
            <tr>
                <th>Pedido Id</th>
        <th>Fecha Inicio</th>
        <th>Fecha Culminacion</th>
        <th>Responsable</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produccions as $produccion)
            <tr>
                <td>{{ $produccion->pedido->cliente }}</td>
            <td>{{ $produccion->fecha_inicio }}</td>
            <td>{{ $produccion->fecha_culminacion }}</td>
            <td>{{ $produccion->user->name }}</td>
            <td>{{ $produccion->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['produccions.destroy', $produccion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produccions.show', [$produccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('produccions.edit', [$produccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
