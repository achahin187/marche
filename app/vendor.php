<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $guarded=[];
     
   public function order(){
        return $this->hasMany('App\order');
        
            }

}
