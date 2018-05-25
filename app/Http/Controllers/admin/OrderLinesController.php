<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\OrderLines;
use App\Meal;

class OrderLinesController extends Controller
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
    $orderLines = OrderLines::all();
    return view('backoffice.orderLines.index')->with('orderLines', $orderLines);
  }

  public function create(){
    $rules = array(
        'order_id'      => 'required',
        'order_lines'   => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return redirect()->route('orderLines.new', Input::get('order_id'))->with('errors', $validator);
    } else {
      // store
      $orderLines               = new OrderLines;
      $orderLines->order_id     = Input::get('order_id');
      $orderLines->meal_id      = Input::get('order_lines');
      $orderLines->save();

      // redirect
      return redirect()->route('orderLines.new', Input::get('order_id'))->with('order_id', Input::get('order_id'));
    }
  }

  public function new($order_id){
    $meals = Meal::all();
    return view('backoffice.orderLine.new')->with('meals', $meals)->with('order_id', $order_id);
  }
}
