<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido
 * @package App\Models
 * @version November 10, 2020, 5:56 pm -03
 *
 * @property string $cliente
 * @property string $fecha_inicio
 * @property string $fecha_entrega
 */
class Pedido extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cliente',
        'fecha_inicio',
        'fecha_entrega'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente' => 'string',
        'fecha_inicio' => 'date',
        'fecha_entrega' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cliente' => 'required',
        'fecha_inicio' => 'required',
        'fecha_entrega' => 'required'
    ];

    public function produccion (){
        return $this-> hasMany('App\Models\Produccion');
    }


}
