<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>CLIENTE</th>
        <th>FECHA DE INICIO</th>
        <th>FECHA DE ENTREGA</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->cliente->cliente_nombre }}</td>
            <td>{{ $pedido->fecha_inicio }}</td>
            <td>{{ $pedido->fecha_entrega }}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedido->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTAS SEGURO?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
