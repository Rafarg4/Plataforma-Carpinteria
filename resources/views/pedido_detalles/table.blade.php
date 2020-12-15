<div class="table-responsive">
    <table class="table" id="pedidoDetalles-table">
        <thead>
            <tr>
                <th>Producto Id</th>
        <th>Pedido Id</th>
        <th>Cdet Cantidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidoDetalles as $pedidoDetalle)
            <tr>
                <td>{{ $pedidoDetalle->producto_id }}</td>
            <td>{{ $pedidoDetalle->pedido_id }}</td>
            <td>{{ $pedidoDetalle->cdet_cantidad }}</td>
                <td>
                    {!! Form::open(['route' => ['pedidoDetalles.destroy', $pedidoDetalle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidoDetalles.show', [$pedidoDetalle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pedidoDetalles.edit', [$pedidoDetalle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
