<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detalle
 * @package App\Models
 * @version September 19, 2020, 6:51 pm UTC
 *
 * @property integer $producto_id
 * @property string $cantidad
 * @property string $obs
 */
class Detalle extends Model
{
    use SoftDeletes;

    public $table = 'detalles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'producto_id',
        'cantidad',
        'obs'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'producto_id' => 'integer',
        'cantidad' => 'string',
        'obs' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'producto_id' => 'required',
        'cantidad' => 'required',
        'obs' => 'required'
    ];
public function producto (){
        return $this-> belongsTo('App\Models\Producto');
    }
    public function stock (){
        return $this-> hasMany('App\Models\Stock');
    }
     public function transferencia (){
        return $this-> hasMany('App\Models\Transferencia');
    }

    
}
