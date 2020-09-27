<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Vent_id</th>
            <th>Vent_tipo</th>

        </tr>
    </thead>

    <tbody>
        @foreach($users as $user) 
        <tr>
                <th scope="row">{{$user->id}}</th>
                <th >{{$user->name }}</th>
                @foreach ($user->ventas as $venta)
                <th>{{ $user->venta_id}}</th>
                <th>{{ $venta->vent_tipo}}</th>
                @endforeach
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>