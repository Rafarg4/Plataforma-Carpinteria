<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>NOMBRE</th>
        <th>DESCRIPCIÓN</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nombre_categoria }}</td>
            <td>{{ $categoria->descripcion_categoria }}</td>
                <td>
                    {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorias.show', [$categoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categorias.edit', [$categoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTAS SEGURO?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
