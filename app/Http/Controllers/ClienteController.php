<?php

namespace App\Http\Controllers;
use App\cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes =  Cliente::all();
        return view('cliente.index', ['clientes' => $clientes] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes->clientes_nombre = request( 'clientes_nombre'); //envia
        $clientes->clientes_ruc = request( 'clientes_ruc'); //envia
        $clientes->clientes_telefono = request( 'clientes_telefono'); //envia
        $clientes->clientes_direccion = request( 'clientes_direccion'); //envia
        $clientes->clientes_email = request( 'clientes_email'); //envia


        $clientes->save();
        return redirect(route('clientes.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cliente= Cliente::findOrFail($id);
        
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
        {
            $clientes = Cliente::find($id);
    
            $clientes->clientes_nombre = request( 'clientes_nombre'); //envia
            $clientes->clientes_ruc = request( 'clientes_ruc'); //envia
            $clientes->clientes_telefono = request( 'clientes_telefono'); //envia
            $clientes->clientes_direccion = request( 'clientes_direccion'); //envia
            $clientes->clientes_email = request( 'clientes_email'); //envia
    
            $clientes->update();
            return redirect(route('clientes.index'));

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
