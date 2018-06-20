<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Menu;
use App\MenuLines;
use App\Meal;

class MenuController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => 'required'
      ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Menu
   */
  protected function create()
  {
    $rules = array(
        'name'       => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('admin/menu/new')
          ->withErrors($validator);
    } else {
      // store
      $menu = new Menu;
      $menu->name     = Input::get('name');
      $menu->save();

      // redirect
      return redirect()->route('menuLines.new', $menu->id)->with('menu_id', $menu);
    }

  }

  public function new(){
    return view('backoffice.menu.new');
  }

  public function index(){
    $menus = Menu::all();
    return view('backoffice.menu.index')->with('menus', $menus);
  }

  public function edit($menu_id){
    $menu = Menu::find($menu_id);
    $meals = Meal::all();
    $menuLines = MenuLines::where('menu_id', $menu_id)->get();
    return view('backoffice.menu.edit', compact('menu', 'menuLines', 'meals'));
  }

  public function update($menu_id){
    $menu = Menu::find($menu_id);

    $rules = array(
      'name'    => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return redirect()->route('menu.edit', $menu_id)->with('errors', $validator);
    } else {
      // store
      $menu->name        = Input::get('name');
      $menu->save();

      // redirect
      return redirect()->route('menu.index');
    }
  }

  public function show($menu_id){
    $menu = Menu::find($menu_id);
    return view('backoffice.menu.show')->with('menu', $menu);
  }
}
