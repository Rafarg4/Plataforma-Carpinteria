<?php

namespace App\Repositories;

use App\Models\Produccion;
use App\Repositories\BaseRepository;

/**
 * Class ProduccionRepository
 * @package App\Repositories
 * @version November 21, 2020, 3:39 pm -03
*/

class ProduccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pedido_id',
        'fecha_inicio',
        'fecha_culminacion',

        'estado',
        'user_id'
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
        return Produccion::class;
    }
}
