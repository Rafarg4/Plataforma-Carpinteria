<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Repositories\PedidoRepository;
use App\Repositories\ClienteRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\PedidoDetalle;
use App\articulo;
use Illuminate\Http\Request;
use Flash;
use Response;

class PedidoController extends AppBaseController
{
    /** @var  PedidoRepository */
    private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedido.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pedidos = $this->pedidoRepository->all();

        return view('pedidos.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new Pedido.
     *
     * @return Response
     */
    public function create()
    {   

        $clientes = Cliente::pluck('cliente_nombre','id');
        $productos = articulo::all();
        return view('pedidos.create',compact(
            'clientes','productos'));
    }

    /**
     * Store a newly created Pedido in storage.
     *
     * @param CreatePedidoRequest $request
     *
     * @return Response
     */



       

       

    public function store(CreatePedidoRequest $request)
    {
        
         $pedidos = new Pedido();

         $pedidos->cliente_id = request( 'cliente_id'); //envia
        $pedidos->fecha_inicio = request( 'fecha_inicio'); //envia
        $pedidos->fecha_entrega = request( 'fecha_entrega'); //envia
       

        $pedidos->save();


        $articulo_id = $request->get('articulo_id'); //array()
        $cdet_cantidad = $request->get('cdet_cantidad');


            //Recorre los detalles de compras
        $cont = 0;
        while($cont < count($articulo_id))
            {
                $detalle = new PedidoDetalle;
                //$venta->id del venta que recien se guardo 
                $detalle->pedido_id = $pedidos->id;
                //id_articulo de la posición cero
                $detalle->articulo_id = $articulo_id[$cont]; //envia
                $detalle->cdet_cantidad = $cdet_cantidad[$cont]; //envia
                $detalle->save();

                $cont = $cont + 1;
            }
             Flash::success('PRODUCCION AGREGADO CORRECTAMENTE.');
    
        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified Pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    
     {

      return view('pedidos.show', 
        ['pedido' => Pedido::findOrFail($id)], 
        ['detalle' => PedidoDetalle::all()]);
     
    }
    /**
     * Show the form for editing the specified Pedido.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado.');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.edit')->with('pedido', $pedido);
    }

    /**
     * Update the specified Pedido in storage.
     *
     * @param int $id
     * @param UpdatePedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoRequest $request)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado.');

            return redirect(route('pedidos.index'));
        }

        $pedido = $this->pedidoRepository->update($request->all(), $id);

        Flash::success('Pedido actualizado correctamente.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified Pedido from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado.');

            return redirect(route('pedidos.index'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success('Pedido eliminado correctamente.');

        return redirect(route('pedidos.index'));
    }
}
