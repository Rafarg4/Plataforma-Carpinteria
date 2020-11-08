<?php

namespace App\Repositories;

use App\Models\Compra;
use App\Repositories\BaseRepository;

/**
 * Class CompraRepository
 * @package App\Repositories
 * @version November 7, 2020, 6:52 pm -03
*/

class CompraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'proveedor_id',
        'user_id',
        'producto_id',
        'comp_fecha',
        'comp_numero',
        'comp_tipo',
        'comp_iva',
        'comp_totalfactura',
        'comp_ivacinco',
        'comp_ivadiez'
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
        return Compra::class;
    }
}
