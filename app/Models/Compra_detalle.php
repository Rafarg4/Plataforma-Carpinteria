<?php
namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra_detalle extends Model
{
    
    protected $table ='compra_detalles';

     public $primaryKey = 'id';

    public static $rules= [
            'comp_fecha' => 'required',
            'comp_numero' => 'required'
    ];
    public function compra(){
            return $this->belongsTo('App\Models\Compra');
     }
    public function articulo(){
            return $this->belongsTo('App\articulo');
        }
   
}