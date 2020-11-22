<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProduccionRequest;
use App\Http\Requests\UpdateProduccionRequest;
use App\Repositories\ProduccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Pedido;

class ProduccionController extends AppBaseController
{
    /** @var  ProduccionRepository */
    private $produccionRepository;

    public function __construct(ProduccionRepository $produccionRepo)
    {
        $this->produccionRepository = $produccionRepo;
    }

    /**
     * Display a listing of the Produccion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $produccions = $this->produccionRepository->all();

        return view('produccions.index')
            ->with('produccions', $produccions);
    }

    /**
     * Show the form for creating a new Produccion.
     *
     * @return Response
     */
    public function create()
    {
      $pedidos = Pedido::pluck('cliente','id');
       return view('produccions.create',compact(
           'pedidos'));
    }

    /**
     * Store a newly created Produccion in storage.
     *
     * @param CreateProduccionRequest $request
     *
     * @return Response
     */
    public function store(CreateProduccionRequest $request)
    {
        $input = $request->all();

        $produccion = $this->produccionRepository->create($input);

        Flash::success('Produccion saved successfully.');

        return redirect(route('produccions.index'));
    }

    /**
     * Display the specified Produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produccion = $this->produccionRepository->find($id);

        if (empty($produccion)) {
            Flash::error('Produccion not found');

            return redirect(route('produccions.index'));
        }

        return view('produccions.show')->with('produccion', $produccion);
    }

    /**
     * Show the form for editing the specified Produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produccion = $this->produccionRepository->find($id);
        $pedidos = Pedido::pluck('cliente','id');

        if (empty($produccion)) {
            Flash::error('Produccion not found');

            return redirect(route('produccions.index'));
        }

        return view('produccions.edit', compact('produccion','pedidos'));
    }

    /**
     * Update the specified Produccion in storage.
     *
     * @param int $id
     * @param UpdateProduccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProduccionRequest $request)
    {
        $produccion = $this->produccionRepository->find($id);

        if (empty($produccion)) {
            Flash::error('Produccion not found');

            return redirect(route('produccions.index'));
        }

        $produccion = $this->produccionRepository->update($request->all(), $id);

        Flash::success('Produccion updated successfully.');

        return redirect(route('produccions.index'));
    }

    /**
     * Remove the specified Produccion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produccion = $this->produccionRepository->find($id);

        if (empty($produccion)) {
            Flash::error('Produccion not found');

            return redirect(route('produccions.index'));
        }

        $this->produccionRepository->delete($id);

        Flash::success('Produccion deleted successfully.');

        return redirect(route('produccions.index'));
    }
}
