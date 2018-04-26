<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Restaurant;


class RestaurantController extends Controller{

  public function update($restaurant_id){

      $rules = array(
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'menu_id' => 'required|int'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('admin/restaurant/' . $restaurant_id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $restaurant = Restaurant::find($id);
          $restaurant->name   = Input::get('name');
          $restaurant->address    = Input::get('address');

          $restaurant->save();

          // redirect
          Session::flash('message', 'Successfully updated nerd!');
          return view('restaurant.show', $restaurant_id);
    }
  }
}
