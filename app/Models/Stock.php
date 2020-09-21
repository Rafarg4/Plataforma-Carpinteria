<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stock
 * @package App\Models
 * @version September 11, 2020, 11:38 pm UTC
 *
 * @property integer $cantidad
 * @property string $producto
 * @property string $deposito
 */
class Stock extends Model
{
    use SoftDeletes;

    public $table = 'stocks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cantidad',
        'producto_id',
        'deposito_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'producto_id' => 'integer',
        'deposito_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad' => 'required',
        'producto_id' => 'required',
        'deposito_id' => 'required'
    ];

    
}
