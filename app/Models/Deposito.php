<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Deposito
 * @package App\Models
 * @version September 20, 2020, 8:47 pm -04
 *
 * @property string $descripcion
 */
class Deposito extends Model
{
    use SoftDeletes;

    public $table = 'depositos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

  public function stock (){
        return $this-> hasMany('App\Models\Stock');
    }   
}
