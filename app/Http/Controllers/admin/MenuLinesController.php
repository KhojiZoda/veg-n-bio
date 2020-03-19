<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\MenuLines;
use App\Meal;

class MenuLinesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(){
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $menuLines = MenuLines::all();
    return view('backoffice.menuLine.index')->with('menuLines', $menuLines);
  }

  public function create(){
    $rules = array(
        'menu_id'      => 'required',
        'meals'        => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return redirect()->route('menuLines.new', Input::get('menu_id'))->with('errors', $validator);
    } else {
      // store
      $menuLines               = new MenuLines;
      $menuLines->meal_id      = Input::get('meals');
      $menuLines->menu_id      = Input::get('menu_id');
      $menuLines->save();

      // redirect
      return redirect()->route('menuLines.new', Input::get('menu_id'))->with('menu_id', Input::get('menu_id'))->with('success', "Le plat a été rajouté");
    }
  }

  public function new($menu_id){
    $meals = Meal::all();
    $menu_meals = MenuLines::where('menu_id', $menu_id)->get();
    return view('backoffice.menuLine.new')->with('meals', $meals)->with('menu_id', $menu_id)->with('menu_meals', $menu_meals);
  }

  public function delete(){
    $menuLine = MenuLines::find(Input::get("menuLine_id"));
    if ($menuLine->delete()) {
      return $data = array(
        'status' => 'success',
        'msg' => 'La ligne du menu a été supprimé'
      );
    }else{
      return $data = array(
        'status' => 'error',
        'msg' => 'Une erreur est survenu'
      );
    }
  }

  public function addMeal(){

    // store
    $menuLines               = new MenuLines;
    $menuLines->meal_id      = Input::get("meal_id");
    $menuLines->menu_id      = Input::get("menu_id");
    if ($menuLines->save()) {
      $data = array(
        'status' => 'success',
        'msg' => 'La ligne du menu a été ajouté'
      );
    }else{
      $data = array(
        'status' => 'error',
        'msg' => 'Une erreur est survenu'
      );
    }
    return response()->json($data);
  }
}
