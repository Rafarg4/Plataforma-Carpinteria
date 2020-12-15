<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compra
 * @package App\Models
 * @version November 7, 2020, 6:52 pm -03
 *
 * @property integer $proveedor_id
 * @property integer $user_id
 * @property integer $articulo_id
 * @property string $comp_fecha
 * @property string $comp_numero
 * @property string $comp_tipo
 * @property string $comp_iva
 * @property string $comp_totalfactura
 * @property string $comp_ivacinco
 * @property string $comp_ivadiez
 */
class Compra extends Model
{
    use SoftDeletes;

    public $table = 'compras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'proveedor_id',
        'user_id',
        'articulo_id',
        'comp_fecha',
        'comp_numero',
        'comp_tipo',
        'comp_iva',
        'comp_totalfactura',
        'comp_ivacinco',
        'comp_ivadiez'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'proveedor_id' => 'integer',
        'user_id' => 'integer',
        'articulo_id' => 'integer',
        'comp_fecha' => 'date',
        'comp_numero' => 'string',
        'comp_tipo' => 'string',
        'comp_iva' => 'string',
        'comp_totalfactura' => 'string',
        'comp_ivacinco' => 'string',
        'comp_ivadiez' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       
    ];
public function proveedor (){
        return $this-> belongsTo('App\Models\Proveedor');
    }
    public function user (){
        return $this-> belongsTo('App\User');
    }

        
    
}
