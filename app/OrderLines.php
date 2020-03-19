<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLines extends Model
{
  public function order(){
    return $this->belongsTo('App\Order');
  }
  public function meal(){
    return $this->hasOne('App\Meal');
  }
}
