<?php

namespace App\Http\Controllers;
use App\venta;
use App\cliente;
use App\articulo;
use App\venta_detalle;
use Illuminate\Http\Request;
 


class VentaController extends Controller
{

    public  function index()
    {
        $ventas =  Venta::all();
        

      return view('venta.index', ['ventas' => $ventas] );
    }

    public function show($id)
    {
    
      return view('venta.show', 
      ['venta' => Venta::findOrFail($id)], 
      ['detalle' => Venta_detalle::all() ],
    );
    }

     public function create()
    {
        $clientes =  Cliente::all();
        $articulos = Articulo::all();
        

        
        return view('venta.create', ['clientes' => $clientes],['articulos' => $articulos] );
    }

   
     public function store(Request $request)
    {
        $ventas = new Venta();

        $ventas->cliente_id = request( 'cliente_id'); //envia
        $ventas->user_id = request( 'user_id'); //envia
        $ventas->vent_fecha = request( 'vent_fecha'); //envia
        $ventas->vent_numero = request( 'vent_numero'); //envia
        $ventas->vent_tipo = request( 'vent_tipo'); //envia
        $ventas->vent_iva = 10; //envia
        $ventas->vent_totalFactura = request( 'vent_totalFactura');

        $ventas->save();

            //Artículos array()
    		//Tabla venta_detalle
    		$articulo_id = $request->get('articulo_id'); //array()
    		$vdet_cantidad = $request->get('vdet_cantidad');


    		

    		//Recorre los detalles de ventas
    		$cont = 0;

    		while($cont < count($articulo_id))
    		{
    			$detalle = new Venta_detalle;
    			//$ingreso->id del ingreso que recien se guardo 
    			$detalle->venta_id = $ventas->id;
    			//id_articulo de la posición cero
    			$detalle->articulo_id = $articulo_id[$cont]; //envia
    			$detalle->vdet_cantidad = $vdet_cantidad[$cont]; //envia
    			
    			$detalle->save();

    			$cont = $cont + 1;
    		}

        return redirect(route('ventas.index'));


    }

 

   
     public function edit(venta $venta)
    {
        //
    }

 
     public function update(Request $request, venta $venta)
    {
        //
    }

  
     public function destroy($id)
        {

            $ventas = Venta::find($id);
            $ventas->delete();
           

            return redirect(route('ventas.index'));
        }

    public function   printpdf($id)
        {
        
        return view('venta.printpdf', 
        ['venta' => Venta::findOrFail($id)], 
        ['detalle' => Venta_detalle::all() ],
        );
        }

   

}
