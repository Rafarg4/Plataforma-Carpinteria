<h3>soy index del redteam</h3>

<div class="table-responsive">
    <table class="table" id="data-table">

            <tr>
                <th>Numero factura</th>
                <th>tipo</th>
            </tr>
    
     
        @foreach($ventas as $venta)
            <tr>
                <th>{{$venta->vent_numero}}</th>
                <th>{{$venta->vent_tipo}}</th>
            
            </tr>
        @endforeach
     
    </table>
</div>
