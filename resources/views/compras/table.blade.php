<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>Proveedor</th>
        <th>Vendedro</th>
        <th>FECHA DE COMPRA</th>
        <th>NUMERO DE COMPRA</th>
        <th>TIPO DE COMPRA</th>
        <th>TOTAL DE FACTURA</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->proveedor->nombre_proveedor }}</td>
            <td>{{ $compra->user->name }}</td>
            <td>{{ $compra->comp_fecha }}</td>
            <td>{{ $compra->comp_numero }}</td>
            <td>{{ $compra->comp_tipo }}</td>
            <td>{{ $compra->comp_totalfactura }}</td>
        
                <td>
                    {!! Form::open(['route' => ['compras.destroy', $compra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('compras.show', [$compra->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('compras.edit', [$compra->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTÁS SEGURO?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
