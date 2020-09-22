<?php

namespace App\Http\Controllers;

use App\venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
   
    public function index()
    {
        return view('venta.index');
        
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(venta $venta)
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
