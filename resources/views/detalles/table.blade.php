<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>PRODUCTO</th>
        <th>CANTIDAD</th>
        <th>OBS</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalles as $detalle)
            <tr>
                <td>{{ $detalle->producto->nombre_producto }}</td>
            <td>{{ $detalle->cantidad }}</td>
            <td>{{ $detalle->obs }}</td>
                <td>
                    {!! Form::open(['route' => ['detalles.destroy', $detalle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalles.show', [$detalle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detalles.edit', [$detalle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTAS SEGURO?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
