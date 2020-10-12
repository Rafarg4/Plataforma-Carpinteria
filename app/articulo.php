<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
   
         protected $table ='articulos';
         public $primaryKey = 'id';
      
         public function venta_detalle(){
            return $this->hasMany('App\venta_detalle');
        } 
        
}
