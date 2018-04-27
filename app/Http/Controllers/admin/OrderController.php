<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
          'date_order' => 'required|date|',
          'client_id' => 'integer',
          'waiter_id' => 'required|integer'
      ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Order
   */
  protected function create(array $data)
  {
      return Order::create(
        [
          'date_order' => $data['date_order'],
          'client_id' => $data['client_id'],
          'waiter_id' => $data['waiter_id']
        ]
      );
      foreach ($data["order_lines"] as $order_lines){
        return OrderLines::create(
          [
            'order_id' => $data['id'],
            'meal_id' => $order_lines["meal_id"]
          ]
        );
      }

  }

  public function new(){
    $meals = Meal::all();
    $users = User::where('role', 'admin')->orWhere('role', 'waiter')->get();
    return view('backoffice.order.new', compact('meals', 'users'));
  }

  public function index(){
    $orders = Order::all();
    return view('backoffice.order.index')->with('orders', $orders);
  }
}
