<?php

namespace App;
use App\venta;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    
         protected $table ='cliente';
         public $primaryKey = 'id';
      
        public function ventas(){
           return $this->hasMany('App\venta');
       }
}
