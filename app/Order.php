<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function meals(){
      return $this->hasMany('App\Meal');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function orderLines(){
      return $this->hasMany('App\OrderLines');
    }
}
