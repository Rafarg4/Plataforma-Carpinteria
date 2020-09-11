<div class="table-responsive">
    <table class="table" id="stocks-table">
        <thead>
            <tr>
                <th>Cantidad</th>
        <th>Producto</th>
        <th>Deposito</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->cantidad }}</td>
            <td>{{ $stock->producto }}</td>
            <td>{{ $stock->deposito }}</td>
                <td>
                    {!! Form::open(['route' => ['stocks.destroy', $stock->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stocks.show', [$stock->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('stocks.edit', [$stock->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
