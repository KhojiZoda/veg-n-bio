<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function users(){
      return $this->hasMany('App\User');
    }

    protected $fillable = [
        'name', 'address'
    ];
}
