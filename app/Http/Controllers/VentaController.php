<?php

namespace App\Http\Controllers;
use App\venta;
use App\cliente;
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
        $clientes =  Cliente::all();
        
        return view('venta.create', ['clientes' => $clientes] );
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
        
        $venta = $this->ventaRepository->find($id);
        
        if (empty($venta)) {
            Flash::error('Venta no encontrado');

            return redirect(route('venta.index'));
        }

        $this->ventaRepository->delete($id);

        Flash::success('Venta eliminado exitosamente.');

        return redirect(route('venta.index'));
    }
    

   
}