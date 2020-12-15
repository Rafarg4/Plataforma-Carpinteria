<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePedidoDetalleRequest;
use App\Http\Requests\UpdatePedidoDetalleRequest;
use App\Repositories\PedidoDetalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PedidoDetalleController extends AppBaseController
{
    /** @var  PedidoDetalleRepository */
    private $pedidoDetalleRepository;

    public function __construct(PedidoDetalleRepository $pedidoDetalleRepo)
    {
        $this->pedidoDetalleRepository = $pedidoDetalleRepo;
    }

    /**
     * Display a listing of the PedidoDetalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pedidoDetalles = $this->pedidoDetalleRepository->all();

        return view('pedido_detalles.index')
            ->with('pedidoDetalles', $pedidoDetalles);
    }

    /**
     * Show the form for creating a new PedidoDetalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_detalles.create');
    }

    /**
     * Store a newly created PedidoDetalle in storage.
     *
     * @param CreatePedidoDetalleRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidoDetalleRequest $request)
    {
        $input = $request->all();

        $pedidoDetalle = $this->pedidoDetalleRepository->create($input);

        Flash::success('Pedido Detalle saved successfully.');

        return redirect(route('pedidoDetalles.index'));
    }

    /**
     * Display the specified PedidoDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoDetalle = $this->pedidoDetalleRepository->find($id);

        if (empty($pedidoDetalle)) {
            Flash::error('Pedido Detalle not found');

            return redirect(route('pedidoDetalles.index'));
        }

        return view('pedido_detalles.show')->with('pedidoDetalle', $pedidoDetalle);
    }

    /**
     * Show the form for editing the specified PedidoDetalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoDetalle = $this->pedidoDetalleRepository->find($id);

        if (empty($pedidoDetalle)) {
            Flash::error('Pedido Detalle not found');

            return redirect(route('pedidoDetalles.index'));
        }

        return view('pedido_detalles.edit')->with('pedidoDetalle', $pedidoDetalle);
    }

    /**
     * Update the specified PedidoDetalle in storage.
     *
     * @param int $id
     * @param UpdatePedidoDetalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoDetalleRequest $request)
    {
        $pedidoDetalle = $this->pedidoDetalleRepository->find($id);

        if (empty($pedidoDetalle)) {
            Flash::error('Pedido Detalle not found');

            return redirect(route('pedidoDetalles.index'));
        }

        $pedidoDetalle = $this->pedidoDetalleRepository->update($request->all(), $id);

        Flash::success('Pedido Detalle updated successfully.');

        return redirect(route('pedidoDetalles.index'));
    }

    /**
     * Remove the specified PedidoDetalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoDetalle = $this->pedidoDetalleRepository->find($id);

        if (empty($pedidoDetalle)) {
            Flash::error('Pedido Detalle not found');

            return redirect(route('pedidoDetalles.index'));
        }

        $this->pedidoDetalleRepository->delete($id);

        Flash::success('Pedido Detalle deleted successfully.');

        return redirect(route('pedidoDetalles.index'));
    }
}
