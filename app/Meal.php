<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function ingredients(){
      return $this -> hasMany('App\Ingredient');
    }

    public function menu(){
      return $this -> belongsToMany('App\Menu');
    }
}
