<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Meal;

class MealController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => 'required',
          'type' => 'required',
          'price'=> 'required|integer'
      ]);
  }

  protected function create()
  {
    $rules = array(
        'name'       => 'required',
        'type'       => 'required',
        'price'      => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('admin/meal/new')
          ->withErrors($validator);
    } else {
      // store
      $meal = new Order;
      $meal->name     = Input::get('name');
      $meal->type     = Input::get('type');
      $meal->price    = Input::get('price');
      $meal->save();

      // redirect
      return redirect()->route('meal.new', $meal->id)->with('order_id', $meal);
    }

  }

  public function new(){
    return view('backoffice.meal.new');
  }
}
