<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function meals(){
      return $this->hasMany('App\Meal');
    }
    public function client(){
      return $this->belongsTo('App\User', 'client_id');
    }
    public function waiter(){
      return $this->belongsTo('App\User', 'waiter_id');
    }
    public function orderLines(){
      return $this->hasMany('App\OrderLines');
    }

    protected $fillable = [
        'date_order', 'client_id', 'waiter_id'
    ];
}
