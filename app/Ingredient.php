<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function mealIngredients(){
      return $this -> belongsTo('App\MealIngredients');
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
