<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyHistory extends Model
{
    public function ingredients(){
      return $this -> hasMany('App\Ingredient');
    }
}
