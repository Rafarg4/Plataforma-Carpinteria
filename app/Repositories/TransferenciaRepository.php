<?php

namespace App\Repositories;

use App\Models\Transferencia;
use App\Repositories\BaseRepository;

/**
 * Class TransferenciaRepository
 * @package App\Repositories
 * @version September 21, 2020, 7:14 pm -04
*/

class TransferenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'origne_id',
        'destino_id',
        'producto'
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
        return Transferencia::class;
    }
}
