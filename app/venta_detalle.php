<?php

namespace App;
use App\venta;

use Illuminate\Database\Eloquent\Model;

class venta_detalle extends Model
{
    //validacion que sea unico 
         protected $table ='ventas_detalle';
         public $primaryKey = 'id';
         public static $rules= [
            'vent_fecha' => 'required',
            'vent_numero' => 'required'
        ];
         public function ventas(){
            return $this->belongsTo('app\venta');
        }
        public function articulo(){
            return $this->belongsTo('App\articulo');}
}
