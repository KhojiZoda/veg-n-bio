<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\BuyHistory;
use App\Ingredient;
use App\User;

class BuyHistoryController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'price' => 'required',
          'quantity'=> 'required'
      ]);
  }

  public function new($ingredient_id){
    $ingredient = Ingredient::find($ingredient_id);
    $provider = User::find($ingredient->user_id);
    return view('backoffice.buyhistory.new', compact('ingredient', 'provider'));
  }

  public function create($ingredient_id){

      $rules = array(
        'price'       => 'required',
        'quantity'    =>  'required'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
        return Redirect::to('/admin/marketplace')
        ->withErrors($validator);
      } else {
        $ingredient = Ingredient::find($ingredient_id);
        $history = new BuyHistory;
        $history->ingredient_id = $ingredient_id;
        $history->notes = Input::get('notes');
        $history->price = Input::get('price');
        $history->quantity = Input::get('quantity');

        $quantity = $ingredient->quantity;

        $ingredient->quantity = $quantity - $history->quantity;
        $ingredient->buy_counter +=1;
        $ingredient->save();
        $history->save();

        return redirect()->route('marketplace.index');
      }
  }
}
