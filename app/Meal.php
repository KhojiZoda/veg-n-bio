<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function orders(){
      return $this -> hasMany('App\Order');
    }

    public function ingredients(){
      return $this -> hasMany('App\Ingredient');
    }

    public function menus(){
      return $this -> hasMany('App\Menu');
    }
}
