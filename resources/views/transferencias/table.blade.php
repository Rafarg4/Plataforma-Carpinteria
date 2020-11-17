<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>CANTIDAD</th>
        <th>DEPÓSITO ORIGEN</th>
        <th>DEPÓSITO DESTINO</th>
        <th>PRODUCTO</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transferencias as $transferencia)
            <tr>
                <td>{{ $transferencia->cantidad }}</td>
             <td>{{ $transferencia->deposito1->descripcion}}</td>
            <td>{{ $transferencia->deposito->descripcion}}</td>
            <td>{{ $transferencia->producto->nombre_producto }}</td>
                <td>
                    {!! Form::open(['route' => ['transferencias.destroy', $transferencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transferencias.show', [$transferencia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTAS SEGURO')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
