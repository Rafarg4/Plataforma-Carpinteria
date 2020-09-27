<?php

namespace App\Http\Controllers;
use App\venta;
use Illuminate\Http\Request;
class VentaController extends Controller
{

    public  function index()
    {
   
      return view('venta.index');
    }

    public function ventasDetail(){
        $ventas =  Venta::all();
        return view('venta.ventasDetail', ['ventas' => $ventas]);
    }

    public function show()
    {
      return view('venta.show');
    }
     public function create()
    {
        //
    }

   
     public function store(Request $request)
    {
        //
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