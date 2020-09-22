<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function index()
    {
        // return view('venta.index');
        
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('venta.index')->with('venta', $user->ventas);
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

