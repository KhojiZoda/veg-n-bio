<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Order;
use App\User;
use App\Meal;
class OrderController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'date_order'  => 'required|date|',
          'client_id'   => 'integer',
          'waiter_id'   => 'required|integer'
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
        'client_id'       => 'required',
        'waiter_id'       => 'required',
        'date_order'      => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('admin/orders/new')
          ->withErrors($validator);
    } else {
      // store
      $order = new Order;
      $order->client_id     = Input::get('client_id');
      $order->waiter_id     = Input::get('waiter_id');
      $order->date_order    = Input::get('date_order');
      $order->save();

      // redirect
      return redirect()->route('orderLines.new', $order->id)->with('order_id', $order);
    }

  }

  public function new(){
    $users = User::where('role', 'admin')->orWhere('role', 'waiter')->get();
    return view('backoffice.order.new', compact('users'));
  }

  public function index(){
    $orders = Order::all();
    return view('backoffice.order.index')->with('orders', $orders);
  }
}
