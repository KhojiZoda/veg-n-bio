<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


use App\MealIngredients;
use App\Meal;

class MealIngredientsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(){
      $this->middleware('auth');
  }


  public function create(){
    $rules = array(
        'meal_id'              => 'required',
        'ingredient_id'        => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return redirect()->route('meal.show', Input::get('meal_id'))->with('errors', $validator);
    } else {
      // store
      $mealIngredients                  = new MealIngredients;
      $mealIngredients->meal_id         = Input::get('meal_id');
      $mealIngredients->ingredient_id   = Input::get('ingredient_id');
      $mealIngredients->save();

      // redirect
      return redirect()->route('meal.show', Input::get('meal_id'))->with('success', "L'ingrédient a été rajouté");
    }
  }

  public function new($menu_id){
    $meals = Meal::all();
    $menu_meals = MenuLines::where('menu_id', $menu_id)->get();
    return view('backoffice.menuLine.new')->with('meals', $meals)->with('menu_id', $menu_id)->with('menu_meals', $menu_meals);
  }
}
