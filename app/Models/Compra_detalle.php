<?php
namespace App;
use App\Compra;
use Illuminate\Database\Eloquent\Model;

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
     public function compra_detalle(){
     return $this->hasMany('App\Models\Compra_detalle');}
   
}