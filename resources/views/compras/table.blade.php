<div class="table-responsive">
    <table class="table" id="compras-table">
        <thead>
            <tr>
                <th>CLIENTE ID</th>
        <th>USUARIO ID</th>
        <th>PRODUCTO ID</th>
        <th>FECHA DE COMPRA</th>
        <th>NUMERO DE COMPRA</th>
        <th>TIPO DE COMPRA</th>
        <th>COMPRA IVA</th>
        <th>TOTAL DE FACTURA DE COMPRA</th>
        <th>IVA 5% COMPRA</th>
        <th>IVA 10% COMPRA</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compras as $compra)
            <tr>
                <td>{{ $compra->cliente_id }}</td>
            <td>{{ $compra->user_id }}</td>
            <td>{{ $compra->producto_id }}</td>
            <td>{{ $compra->comp_fecha }}</td>
            <td>{{ $compra->comp_numero }}</td>
            <td>{{ $compra->comp_tipo }}</td>
            <td>{{ $compra->comp_iva }}</td>
            <td>{{ $compra->comp_totalfactura }}</td>
            <td>{{ $compra->comp_ivacinco }}</td>
            <td>{{ $compra->comp_ivadiez }}</td>
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
