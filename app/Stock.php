<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function ingredient(){
      return $this -> belongsTo('App\Ingredient');
    }
}
