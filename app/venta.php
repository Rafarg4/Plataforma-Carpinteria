<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
   protected $table ='ventas';
   public $primaryKey = 'id';

   public function user(){
       return $this->belongsTo('App\User');

}}
