<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stock
 * @package App\Models
 * @version September 20, 2020, 8:51 pm -04
 *
 * @property integer $deposito_id
 * @property string $producto
 * @property integer $cantidad
 */
class Stock extends Model
{
    use SoftDeletes;

    public $table = 'stocks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'deposito_id',
        'producto_id',
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deposito_id' => 'integer',
        'producto_id' => 'string',
        'cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'deposito_id' => 'required',
        'producto_id' => 'required',
        'cantidad' => 'required'
    ];
public function deposito (){
     return $this-> belongsTo('App\Models\Deposito');
     }
     public function producto (){
     return $this-> belongsTo('App\Models\Producto');
     }
    
}
