<?php

namespace App\Http\Controllers;
use App\Venta;
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
    return $this->belongsTo('App\User','user_id');
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