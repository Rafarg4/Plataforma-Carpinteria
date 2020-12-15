<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PedidoDetalle
 * @package App\Models
 * @version December 14, 2020, 8:42 pm -03
 *
 * @property integer $producto_id
 * @property integer $pedido_id
 * @property string $cdet_cantidad
 */
class PedidoDetalle extends Model
{
    use SoftDeletes;

    public $table = 'pedido_detalles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'producto_id',
        'pedido_id',
        'cdet_cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'producto_id' => 'integer',
        'pedido_id' => 'integer',
        'cdet_cantidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'producto_id' => 'required',
        'pedido_id' => 'required',
        'cdet_cantidad' => 'required'
    ];
public function articulo(){
            return $this->belongsTo('App\articulo');
        }
       
}
