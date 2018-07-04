<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function users(){
      return $this->hasMany('App\User');
    }

    public function menu(){
      return $this->hasOne('App\Menu');
    }

    protected $fillable = [
        'name', 'address'
    ];
}
