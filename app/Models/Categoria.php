<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * @package App\Models
 * @version September 9, 2020, 4:14 am UTC
 *
 * @property string $nombre_categoria
 * @property string $descripcion_categoria
 */
class Categoria extends Model
{
    use SoftDeletes;

    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_categoria',
        'descripcion_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_categoria' => 'string',
        'descripcion_categoria' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_categoria' => 'required',
        'descripcion_categoria' => 'required'
    ];
public function producto (){
     return $this-> hasMany('App\Models\Producto');

    }
    
}
