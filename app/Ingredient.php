<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function meals(){
      return $this -> belongsToMany('App\Meal');
    }
    public function stock(){
      return $this -> belongsTo('App\Stock');
    }
    public function allergen(){
      return $this -> belongsTo('App\Allergen');
    }
    public function user(){
      return $this -> belongsTo('App\User');
    }
    public function buyhistory(){
      return $this -> hasOne('App\BuyHistory');
    }
}
