<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Menu;
use App\MenuLines;
use App\Meal;


class DataLoadingsController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function getMenuMeals($menu_id){
    $menu = Menu::find($menu_id);
    $menuLines = MenuLines::with('meal')->with('menu')->where('menu_id', $menu_id)->get();
    return response()->json(['data' => $menuLines]);
  }

  public function getUsers(){
    $users = User::all()->where('role', 'admin');
    return response()->json(['data' => $users]);
  }

  public function getProviders(){
    $providers = User::all()->where('role', 'provider')->values();
    return response()->json(['data' => $providers]);
  }
}
