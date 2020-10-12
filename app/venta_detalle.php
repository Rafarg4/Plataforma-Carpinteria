<?php

namespace App;
use App\venta;

use Illuminate\Database\Eloquent\Model;

class venta_detalle extends Model
{
    
         protected $table ='ventas_detalle';
         public $primaryKey = 'id';
      
         public function ventas(){
            return $this->belongsTo('app\venta');
        }
        public function articulo(){
            return $this->belongsTo('App\articulo');}
}
