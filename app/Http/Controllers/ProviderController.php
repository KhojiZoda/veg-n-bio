<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Ingredient;

class ProviderController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show($provider_id){
    $provider = User::find($provider_id);
    return view('backoffice.provider.show')->with('provider', $provider);
  }

  public function providerIngredients($provider_id){
    $ingredients = Ingredient::where('user_id', $provider_id)->get();
    return response()->json(['data' => $ingredients]);
  }

  public function new($provider_id){
    return view('backoffice.provider.new')->with('provider_id', $provider_id);
  }

  public function create($provider_id){

      $rules = array(
        'price'       => 'required',
        'quantity'    =>  'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
        return redirect()->route('provider.show', $provider_id)->withErrors($validator);
      } else {
        $ingredient = new Ingredient;
        $ingredient->name = Input::get('name');
        $ingredient->price = Input::get('price');
        $ingredient->quantity = Input::get('quantity');
        $ingredient->buy_counter = 0;
        $ingredient->user_id = $provider_id;

        $ingredient->save();

        return redirect()->route('provider.show', $provider_id);
      }
  }
}
