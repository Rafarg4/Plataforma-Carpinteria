<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version September 19, 2020, 6:51 pm UTC
 *
 * @property string $nombre_producto
 * @property string $descripcion_producto
 * @property integer $categoria_id
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_producto' => 'string',
        'descripcion_producto' => 'string',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_producto' => 'required',
        'descripcion_producto' => 'required',
        'categoria_id' => 'required'
    ];
public function categoria (){
        return $this-> belongsTo('App\Models\Categoria');
    }
    
}
