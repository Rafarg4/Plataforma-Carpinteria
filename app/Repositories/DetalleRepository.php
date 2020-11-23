<?php

namespace App\Repositories;

use App\Models\Detalle;
use App\Repositories\BaseRepository;

/**
 * Class DetalleRepository
 * @package App\Repositories
 * @version September 19, 2020, 6:51 pm UTC
*/

class DetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'producto_id',
        'cantidad',
        'obs'
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
        return Detalle::class;
    }
}
