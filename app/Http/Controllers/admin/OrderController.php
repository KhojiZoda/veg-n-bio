<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function index(){
    $orders = Order::all();
    return view('backoffice.order.index')->with('orders', $orders);
  }

  public function show(){

  }

  public function edit(){

  }

  public function update(){

  }
}
