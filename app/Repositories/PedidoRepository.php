<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories
 * @version November 10, 2020, 5:56 pm -03
*/

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente',
        'fecha_inicio',
        'fecha_entrega'
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
        return Pedido::class;
    }
}
