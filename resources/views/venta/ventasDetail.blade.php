<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Tipo</th>
            <th>Usuario</th>
        </tr>
    </thead>

    <tbody>
        @foreach($ventas as $venta)
        <tr>
                <th scope="row">{{$venta->id}}</th>
                <th >{{$venta->vent_tipo }}</th>

                    <th>{{$venta->user->name}}</th>
             
             
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>