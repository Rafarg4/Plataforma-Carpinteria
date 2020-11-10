<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
            <tr>
                <th>Cliente</th>
        <th>Fecha Inicio</th>
        <th>Fecha Entrega</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->cliente }}</td>
            <td>{{ $pedido->fecha_inicio }}</td>
            <td>{{ $pedido->fecha_entrega }}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pedidos.edit', [$pedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
