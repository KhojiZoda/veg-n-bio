<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLines extends Model
{
  public function menu(){
    return $this->belongsTo('App\Menu');
  }
  public function meal(){
    return $this->belongsTo('App\Meal');
  }
}
