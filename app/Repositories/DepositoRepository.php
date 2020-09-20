<?php

namespace App\Repositories;

use App\Models\Deposito;
use App\Repositories\BaseRepository;

/**
 * Class DepositoRepository
 * @package App\Repositories
 * @version September 20, 2020, 7:22 pm -04
*/

class DepositoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
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
        return Deposito::class;
    }
}
