<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealIngredients extends Model
{
  public function ingredient(){
    return $this->belongsTo('App\ingredient');
  }
  public function meal(){
    return $this->belongsTo('App\Meal');
  }
}
