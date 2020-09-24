
<div class="table-responsive">
    <table class="table" id="data-table">

            <tr>
                <th>Numero factura</th>
                <th>tipo</th>
                <th> usuario <th>
            </tr>
    
     
        
            <tr>
              

@foreach ($ventas as $key)
             <th> {{$key->vent_numero}}</th>
               <th> {{$key->vent_tipo}}</th>
        
               <th> {{$key->user->name}}</th>
            
            </tr>
    
     @endforeach    </table>
</div>

