<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{

         protected $table ='articulos';
         public $primaryKey = 'id';

         protected $fillable = [
             'articulos_descripcion', 'articulos_precio', 'art_tipoIva'
         ];

         public function venta_detalle(){
            return $this->hasMany('App\venta_detalle');
        }
         public function compra_detalle(){
            return $this->hasMany('App\Models\Compra_detalle');
        }
        public function pedido_detalle(){
            return $this->hasMany('App\Models\PedidoDetalle');
        }

}
