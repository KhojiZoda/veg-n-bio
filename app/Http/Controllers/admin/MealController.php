<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Meal;
use App\MealIngredients;
use App\BuyHistory;
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
      $meal = new Meal;
      $meal->name     = Input::get('name');
      $meal->type     = Input::get('type');
      $meal->price    = Input::get('price');
      $meal->save();

      // redirect
      return redirect()->route('meal.show', $meal->id);
    }

  }

  public function new(){
    return view('backoffice.meal.new');
  }

  public function index(){
    return view('backoffice.meal.index');
  }

  public function show($meal_id){
    $meal = Meal::find($meal_id);
    $ingredients_all = BuyHistory::with('ingredient')->get();
    $ingredients = MealIngredients::with('ingredient')->where('meal_id', $meal_id)->get();
    return view('backoffice.meal.show')->with('meal', $meal)->with('ingredients', $ingredients)->with('ingredients_all', $ingredients_all);
  }

  public function delete(){
    $meal = Meal::find(Input::get("meal_id"));
    if ($meal->delete()) {
      return $data = array(
        'status' => 'success',
        'msg' => 'Le plat a été supprimé'
      );
    }else{
      return $data = array(
        'status' => 'error',
        'msg' => 'Une erreur est survenu'
      );
    }
  }
}
