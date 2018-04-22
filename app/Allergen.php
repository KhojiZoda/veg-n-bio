<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    public function ingridient(){
      return $this -> belongsTo('App\Ingridient');
    }
}
