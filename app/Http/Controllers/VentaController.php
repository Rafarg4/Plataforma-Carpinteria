<?php

namespace App\Http\Controllers;
use App\venta;

use Illuminate\Http\Request;
 


class VentaController extends Controller
{

    public  function index()
    {
        $ventas =  Venta::all();
        

      return view('venta.index', ['ventas' => $ventas] );
    }

    public function show()
    {
      return view('venta.show');
    }
     public function create()
    {
        
        return view('venta.create');
    }

   
     public function store(Request $request)
    {
        $ventas =  Venta::all();
        


    }

 

   
     public function edit(venta $venta)
    {
        //
    }

 
     public function update(Request $request, venta $venta)
    {
        //
    }

  
     public function destroy(venta $venta)
    {
        //
    }

   
}