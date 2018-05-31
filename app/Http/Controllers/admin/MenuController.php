<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
   * @return \App\Order
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
}
