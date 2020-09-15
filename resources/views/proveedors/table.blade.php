<div class="table-responsive">
    <table class="table" id="proveedors-table">
        <thead>
            <tr>
                <th>Nombre Proveedor</th>
        <th>Ruc Proveedor</th>
        <th>Direccion Proveedor</th>
        <th>Telefono Proveedor</th>
        <th>Email Proveedor</th>
        <th>Descripcion Proveedor</th>
                <th colspan="3">Action</th>
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
