<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Restaurant;
use App\Menu;
use App\MenuLines;

class FrontController extends Controller
{
    public function restaurants(){
      $restaurants = Restaurant::all();
      return view('front.pages.restaurants')->with('restaurants', $restaurants);
    }

    public function menu($restaurant_id, $menu_id){
      $menu = MenuLines::with('meal.mealIngredients.ingredient')->where('menu_id', $menu_id)->get();
      return view('front.pages.menu')->with('menu', $menu);
    }
}
