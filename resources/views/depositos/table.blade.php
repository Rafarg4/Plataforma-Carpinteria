<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>DESCRIPCION</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($depositos as $deposito)
            <tr>
                <td>{{ $deposito->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['depositos.destroy', $deposito->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('depositos.show', [$deposito->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('depositos.edit', [$deposito->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTAS SEGURO?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
