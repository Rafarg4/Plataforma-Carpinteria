<?php

namespace App;
use App\User;
use App\cliente;



use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
   protected $table ='ventas';
   public $primaryKey = 'id';


public function user(){
return $this->belongsTo('App\user');}


 public function cliente(){
 return $this->belongsTo('App\cliente');}
 public function venta_detalle(){
 return $this->hasMany('App\venta_detalle');}



}


