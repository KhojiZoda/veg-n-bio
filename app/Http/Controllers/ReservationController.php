<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Restaurant;
use App\Reservation;

class ReservationController extends Controller
{
  protected function validator(array $data)
  {
      return Validator::make($data, [
          'reservator'        => 'required',
          'email'             => 'required',
          'reservation_date'  => 'required|date',
          'time'              => 'required',
          'nb_of_people'      => 'required|integer',
          'restaurant_id'     => 'required|integer'
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
      'reservator'        => 'required',
      'email'             => 'required',
      'reservation_date'  => 'required',
      'time'              => 'required',
      'nb_of_people'      => 'required',
      'restaurant_id'     => 'required'
    );
    $validator = Validator::make(Input::all(), $rules);

    // process the login
    if ($validator->fails()) {
      return Redirect::to('/reservation/new')
          ->withErrors($validator);
    } else {
      // store
      $reservation = new Reservation;
      $reservation->reservator        = Input::get('reservator');
      $reservation->email             = Input::get('email');
      $reservation->reservation_date  = Input::get('reservation_date');
      $reservation->time              = Input::get('time');
      $reservation->nb_of_people      = Input::get('nb_of_people');
      $reservation->restaurant_id     = Input::get('restaurant_id');


      $reservation->save();

      // redirect
      return Redirect::to('/reservation/new')->with('success', "Votre reservation est pris en compte");
    }

  }

  public function new(){
    $restaurants = Restaurant::all();
    return view('front.pages.reservation')->with('restaurants', $restaurants);
  }

  public function index(){
    $reservations = Reservation::all();
    return view('backoffice.reservation.index')->with('reservations', $reservations);
  }
}
