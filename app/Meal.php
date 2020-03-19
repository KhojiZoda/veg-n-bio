<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function ingredients(){
      return $this -> hasMany('App\Ingredient');
    }

    public function menuLines(){
      return $this -> belongsTo('App\MenuLines');
    }
}
