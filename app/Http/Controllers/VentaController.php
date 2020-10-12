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
    
}