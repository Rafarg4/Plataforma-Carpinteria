<?php

namespace App\Repositories;

use App\Models\Stock;
use App\Repositories\BaseRepository;

/**
 * Class StockRepository
 * @package App\Repositories
 * @version September 11, 2020, 11:38 pm UTC
*/

class StockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cantidad',
        'producto',
        'deposito'
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
        return Stock::class;
    }
}
