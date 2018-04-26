<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function meals(){
      return $this -> hasMany('App\Meal');
    }
    public function stock(){
      return $this -> belongsTo('App\Stock');
    }
    public function allergen(){
      return $this -> belongsTo('App\Allergen');
    }
}
