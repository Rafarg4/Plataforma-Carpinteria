<?php

namespace App;
use App\venta;

use Illuminate\Database\Eloquent\Model;

class forma_de_pago extends Model
{
    
         protected $table ='formas';
         public $primaryKey = 'id';
      
         public function ventas(){
            return $this->hasMany(venta::class);
        }
}
