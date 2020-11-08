<?php
namespace App;
use App\Compra;

use Illuminate\Database\Eloquent\Model;

class Compra_detalle extends Model
{
    
    protected $table ='Compra_detalle';

     public $primaryKey = 'id';

    public static $rules= [
            'comp_fecha' => 'required',
            'comp_numero' => 'required'
        ];
    public function Compra(){
            return $this->belongsTo('App\Models\Compra');
        }
   
}