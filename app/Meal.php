<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function mealIngredients(){
      return $this -> hasMany('App\MealIngredients');
    }

    public function menuLines(){
      return $this -> belongsTo('App\MenuLines');
    }
}
