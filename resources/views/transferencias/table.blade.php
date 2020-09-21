<div class="table-responsive">
    <table class="table" id="transferencias-table">
        <thead>
            <tr>
                <th>Cantidad</th>
        <th>Origne Id</th>
        <th>Destino Id</th>
        <th>Producto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transferencias as $transferencia)
            <tr>
                <td>{{ $transferencia->cantidad }}</td>
            <td>{{ $transferencia->origne_id }}</td>
            <td>{{ $transferencia->destino_id }}</td>
            <td>{{ $transferencia->producto }}</td>
                <td>
                    {!! Form::open(['route' => ['transferencias.destroy', $transferencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transferencias.show', [$transferencia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('transferencias.edit', [$transferencia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
