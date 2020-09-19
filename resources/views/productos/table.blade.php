<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>NOMBRE PRODUCTO</th>
        <th>DESCRIPCIÓN PRODUCTO</th>
        <th>CATEGORIA ID</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre_producto }}</td>
            <td>{{ $producto->descripcion_producto }}</td>
            <td>{{ $producto->categoria->nombre_categoria }}</td>
                <td>
                    {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productos.edit', [$producto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
