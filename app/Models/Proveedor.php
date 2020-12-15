<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedor
 * @package App\Models
 * @version September 15, 2020, 1:19 am UTC
 *
 * @property string $nombre_proveedor
 * @property string $ruc_proveedor
 * @property string $direccion_proveedor
 * @property string $telefono_proveedor
 * @property string $email_proveedor
 * @property string $descripcion_proveedor
 */
class Proveedor extends Model
{
    use SoftDeletes;

    public $table = 'proveedors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_proveedor',
        'ruc_proveedor',
        'direccion_proveedor',
        'telefono_proveedor',
        'email_proveedor',
        'descripcion_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_proveedor' => 'string',
        'ruc_proveedor' => 'string',
        'direccion_proveedor' => 'string',
        'telefono_proveedor' => 'string',
        'email_proveedor' => 'string',
        'descripcion_proveedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_proveedor' => 'required',
        'ruc_proveedor' => 'required',
        'direccion_proveedor' => 'required',
        'telefono_proveedor' => 'required',
        'email_proveedor' => 'required',
        'descripcion_proveedor' => 'required'
    ];

    public function compra (){
        return $this-> hasMany('App\Models\Compra');
    }

}
