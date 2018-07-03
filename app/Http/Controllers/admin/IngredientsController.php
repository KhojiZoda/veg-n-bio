<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Ingredient;
use App\BuyHistory;

class IngredientsController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => 'required',
          'price' => 'required',
          'quantity'=> 'required'
      ]);
  }

  public function buy($ingredient_id){

  }
}
