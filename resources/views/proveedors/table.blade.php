<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>NOMBRE</th>
        <th>RUC</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>EMAIL</th>
        <th>DESCRIPCION</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->nombre_proveedor }}</td>
            <td>{{ $proveedor->ruc_proveedor }}</td>
            <td>{{ $proveedor->direccion_proveedor }}</td>
            <td>{{ $proveedor->telefono_proveedor }}</td>
            <td>{{ $proveedor->email_proveedor }}</td>
            <td>{{ $proveedor->descripcion_proveedor }}</td>
                <td>
                    {!! Form::open(['route' => ['proveedors.destroy', $proveedor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedors.show', [$proveedor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('proveedors.edit', [$proveedor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
