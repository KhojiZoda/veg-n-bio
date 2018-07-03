<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Ingredient;

class MarketplaceController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

  public function index(){
    $nb_visitors = User::all()->where('role', 'provider')->count();
    $nb_ingredients = Ingredient::all()->count();
    return view('backoffice.marketplace.index', compact('nb_visitors'));
  }
}
