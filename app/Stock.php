<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function ingridient(){
      return $this -> belongsTo('App\Ingridient');
    }
}
