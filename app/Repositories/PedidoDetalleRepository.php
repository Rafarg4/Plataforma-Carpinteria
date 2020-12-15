<?php

namespace App\Repositories;

use App\Models\PedidoDetalle;
use App\Repositories\BaseRepository;

/**
 * Class PedidoDetalleRepository
 * @package App\Repositories
 * @version December 14, 2020, 8:42 pm -03
*/

class PedidoDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto_id',
        'pedido_id',
        'cdet_cantidad'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PedidoDetalle::class;
    }
}
