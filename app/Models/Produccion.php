<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Produccion
 * @package App\Models
 * @version November 21, 2020, 3:39 pm -03
 *
 * @property integer $pedido_id
 * @property string $fecha_inicio
 * @property string $fecha_culminacion
 * @property string $responsable
 * @property string $estado
 */
class Produccion extends Model
{
    use SoftDeletes;

    public $table = 'produccions';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pedido_id',
        'fecha_inicio',
        'fecha_culminacion',

        'estado',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pedido_id' => 'integer',
        'fecha_inicio' => 'text',
        'fecha_culminacion' => 'text',

        'estado' => 'string',
        'user_id'=> 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pedido_id' => 'required',
        'fecha_inicio' => 'required',
        'fecha_culminacion' => 'required',

        'estado' => 'required',
        'user_id' => 'required'
    ];

    public function pedido (){
            return $this-> belongsTo('App\Models\Pedido');
        }
        public function user (){
                return $this-> belongsTo('App\User');
            }



}
