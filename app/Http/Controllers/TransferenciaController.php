<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransferenciaRequest;
use App\Http\Requests\UpdateTransferenciaRequest;
use App\Repositories\TransferenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TransferenciaController extends AppBaseController
{
    /** @var  TransferenciaRepository */
    private $transferenciaRepository;

    public function __construct(TransferenciaRepository $transferenciaRepo)
    {
        $this->transferenciaRepository = $transferenciaRepo;
    }

    /**
     * Display a listing of the Transferencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $transferencias = $this->transferenciaRepository->all();

        return view('transferencias.index')
            ->with('transferencias', $transferencias);
    }

    /**
     * Show the form for creating a new Transferencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('transferencias.create');
    }

    /**
     * Store a newly created Transferencia in storage.
     *
     * @param CreateTransferenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateTransferenciaRequest $request)
    {
        $input = $request->all();

        $transferencia = $this->transferenciaRepository->create($input);

        Flash::success('Transferencia se guardo exitosamente.');

        return redirect(route('transferencias.index'));
    }

    /**
     * Display the specified Transferencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia no encontrada');

            return redirect(route('transferencias.index'));
        }

        return view('transferencias.show')->with('transferencia', $transferencia);
    }

    /**
     * Show the form for editing the specified Transferencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia no encontrado');

            return redirect(route('transferencias.index'));
        }

        return view('transferencias.edit')->with('transferencia', $transferencia);
    }

    /**
     * Update the specified Transferencia in storage.
     *
     * @param int $id
     * @param UpdateTransferenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTransferenciaRequest $request)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia no encontrado');

            return redirect(route('transferencias.index'));
        }

        $transferencia = $this->transferenciaRepository->update($request->all(), $id);

        Flash::success('Transferencia se actualizo exitosamente.');

        return redirect(route('transferencias.index'));
    }

    /**
     * Remove the specified Transferencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia no encontrado');

            return redirect(route('transferencias.index'));
        }

        $this->transferenciaRepository->delete($id);

        Flash::success('Transferencia se elimino exitosamente.');

        return redirect(route('transferencias.index'));
    }
}
