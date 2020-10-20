<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transferencia
 * @package App\Models
 * @version September 21, 2020, 7:14 pm -04
 *
 * @property integer $cantidad
 * @property integer $origne_id
 * @property integer $destino_id
 * @property string $producto
 */
class Transferencia extends Model
{
    use SoftDeletes;

    public $table = 'transferencias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cantidad',
        'origne_id',
        'destino_id',
        'producto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'origne_id' => 'integer',
        'destino_id' => 'integer',
        'producto_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad' => 'required',
        'origne_id' => 'required',
        'destino_id' => 'required',
        'producto_id' => 'required'
    ];

    public function deposito1(){
        return $this-> belongsTo('App\Models\Deposito', 'origne_id');
    }
    public function deposito(){
        return $this-> belongsTo('App\Models\Deposito', 'destino_id');
    }
    public function producto(){
        return $this-> belongsTo('App\Models\Producto');
    }
    
}
