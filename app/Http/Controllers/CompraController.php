<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompraRequest;
use App\Http\Requests\UpdateCompraRequest;
use App\Repositories\CompraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\articulo;
use App\Models\Compra;
use App\Models\Proveedor;
use App\User;
use function GuzzleHttp\Promise\all;
use App\Models\Compra_detalle;
class CompraController extends AppBaseController
{
    /** @var  CompraRepository */
    private $compraRepository;

    public function __construct(CompraRepository $compraRepo)
    {
        $this->compraRepository = $compraRepo;
    }

    /**
     * Display a listing of the Compra.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $compras = $this->compraRepository->all();

        return view('compras.index')
            ->with('compras', $compras);
    }

    /**
     * Show the form for creating a new Compra.
     *
     * @return Response
     */
    public function create()
    {
       $proveedors = Proveedor::pluck('nombre_proveedor','id');
       $productos = articulo::all();
       $users = User::pluck('name','id');
        return view('compras.create',compact(
            'proveedors','productos','users'));
    }

    /**
     * Store a newly created Compra in storage.
     *
     * @param CreateCompraRequest $request
     *
     * @return Response
     */
    public function store(CreateCompraRequest $request)
     {
        $compras = new Compra();

        $compras->proveedor_id = request( 'proveedor_id'); //envia
        $compras->user_id = request( 'user_id'); //envia
        $compras->comp_fecha = request( 'comp_fecha'); //envia
        $compras->comp_numero = request( 'comp_numero'); //envia
        $compras->comp_tipo = request( 'comp_tipo'); //envia
        $compras->comp_iva = request( 'comp_iva'); //envia
        $compras->comp_ivacinco = request( 'comp_ivacinco'); //envia
       $compras->comp_ivadiez = request( 'comp_ivadiez'); //envia
             
        $compras->comp_totalfactura = request( 'comp_totalfactura');

        $compras->save();

            //Artículos array()
            //Tabla venta_detalle
            $articulo_id = $request->get('articulo_id'); //array()
            $cdet_cantidad = $request->get('cdet_cantidad');


            //Recorre los detalles de compras
            $cont = 0;

            while($cont < count($articulo_id))
            {
                $detalle = new Compra_detalle;
                //$venta->id del venta que recien se guardo 
                $detalle->compra_id = $compras->id;
                //id_articulo de la posición cero
                $detalle->articulo_id = $articulo_id[$cont]; //envia
                $detalle->cdet_cantidad = $cdet_cantidad[$cont]; //envia
                
                $detalle->save();

                $cont = $cont + 1;
            }

        return redirect(route('compras.index'));


    }


    /**
     * Display the specified Compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $compra = $this->compraRepository->find($id);

        if (empty($compra)) {
            Flash::error('Compra not found');

            return redirect(route('compras.index'));
        }

        return view('compras.show')->with('compra', $compra);
    }

    /**
     * Show the form for editing the specified Compra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compra = $this->compraRepository->find($id);
        $proveedors = Proveedor::pluck('nombre_proveedor','id');
        $productos = articulo::pluck('articulos_descripcion','id');
        $users = User::pluck('name','id');

        if (empty($compra)) {
            Flash::error('Compra not found');

            return redirect(route('compras.index'));
        }

        return view('compras.edit', compact('compra','productos','proveedors','users'));
    }

    /**
     * Update the specified Compra in storage.
     *
     * @param int $id
     * @param UpdateCompraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompraRequest $request)
    {
        $compra = $this->compraRepository->find($id);

        if (empty($compra)) {
            Flash::error('Compra not found');

            return redirect(route('compras.index'));
        }

        $compra = $this->compraRepository->update($request->all(), $id);

        Flash::success('Compra updated successfully.');

        return redirect(route('compras.index'));
    }

    /**
     * Remove the specified Compra from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $compra = $this->compraRepository->find($id);

        if (empty($compra)) {
            Flash::error('Compra not found');

            return redirect(route('compras.index'));
        }

        $this->compraRepository->delete($id);

        Flash::success('Compra deleted successfully.');

        return redirect(route('compras.index'));
    }
}
