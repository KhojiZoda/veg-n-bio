<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Restaurant;
use App\Menu;
class RestaurantController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => 'required',
          'address' => 'required',
          'menu_id' => 'integer',
          'nb_places' => 'required|integer'
      ]);
  }

  protected function create()
  {
    $rules = array(
      'name'    => 'required',
      'address' => 'required',
      'menu_id' => 'required',
      'nb_places' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('admin/restaurant/new')
          ->withErrors($validator);
    } else {
      // store
      $restaurant = new Restaurant;
      $restaurant->name        = Input::get('name');
      $restaurant->address     = Input::get('address');
      $restaurant->menu_id     = Input::get('menu_id');
      $restaurant->nb_places   = Input::get('nb_places');
      $restaurant->save();

      // redirect
      return redirect()->route('restaurant.index');
    }

  }

  public function new(){
    $menus = Menu::all();
    return view('backoffice.restaurant.new')->with('menus', $menus);
  }

  public function show($restaurant_id){
    $restaurant = Restaurant::find($restaurant_id);
    $menu = Menu::find($restaurant->menu_id);
    return view('backoffice.restaurant.show')->with('restaurant', $restaurant)->with('menu', $menu);
  }

  public function index(){
    $restaurants = Restaurant::all();
    return view('backoffice.restaurant.index')->with('restaurants', $restaurants);
  }

  public function edit($restaurant_id){
    $restaurant = Restaurant::find($restaurant_id);
    return view('backoffice.restaurant.edit')->with('restaurant', $restaurant);
  }

  public function update($restaurant_id){
    $restaurant = Restaurant::find($restaurant_id);

    $rules = array(
      'name'    => 'required',
      'address' => 'required',
      'menu_id' => 'required',
      'nb_places' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return redirect()->route('restaurant.edit', $restaurant_id)->with('errors', $validator);
    } else {
      // store
      $restaurant->name        = Input::get('name');
      $restaurant->address     = Input::get('address');
      $restaurant->menu_id     = Input::get('menu_id');
      $restaurant->nb_places   = Input::get('nb_places');
      $restaurant->save();

      // redirect
      return redirect()->route('restaurant.index');
    }

  }
}
