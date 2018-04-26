<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    public function ingredient(){
      return $this -> belongsTo('App\Ingredient');
    }
}
