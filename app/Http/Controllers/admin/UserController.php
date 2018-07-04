<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;


class UserController extends Controller{

  public function index(){

    $users = User::all();
    return view('backoffice.user.index')->with('users', $users);
  }

  public function show($user_id){
    $user_data = User::find($user_id);
    return view('backoffice.user.show')->with('user_data', $user_data);
  }

  public function edit($user_id){
      $user = User::find($user_id);
      return view('backoffice.user.edit')->with('user', $user);
  }

  public function update($user_id){
      // $user = User::find($user_id);
      // $user->validate(request(), [
      //   'first_name' => 'required|string|max:255',
      //   'last_name' => 'required|string|max:255',
      //   'email' => 'required|string|email|max:255|unique:users',
      //   'password' => 'required|string|min:6|confirmed',
      //   'birthday' => 'required|date',
      //   'gender' => 'required|string',
      //   'address' => 'required|string|max:255',
      //   'role' => 'required|string|max:255',
      // ]);
      //
      // $user->first_name = request('first_name');
      // $user->last_name = request('last_name')
      // $user->email = request('email');
      // $user->password = bcrypt(request('password'));
      // $user->birthday = request('birthday');
      // $user->gender = request('gender');
      // $user->address = request('address');
      // $user->role = request('role');
      //
      // $user->save();
      //
      // return back();

      $rules = array(
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'birthday' => 'required|date',
        'gender' => 'required|string',
        'address' => 'required|string|max:255',
        'role' => 'required|string|max:255',
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('admin/user/' . $user_id . '/edit')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $user = User::find($id);
          $user->first_name   = Input::get('first_name');
          $user->last_name    = Input::get('last_name');
          $user->email        = Input::get('email');
          $user->password     = Input::get('password');
          $user->birthday     = Input::get('birthday');
          $user->gender       = bcrypt(Input::get('gender'));
          $user->address      = Input::get('address');
          $user->role         = Input::get('role');

          $user->save();

          // redirect
          Session::flash('message', 'Successfully updated nerd!');
          return view('user.show', $user_id);
    }
  }

  public function archive($user_id){
    $user = User::find($user_id);
    if ($user->status=="active") {
      $user->status="archived";
      $user->password="";
      if ($user->save()) {
        $data = array(
           'status' => 'success',
           'msg' => 'Le salarié a été archivé',
       );
      }else {
        $data = array(
           'status' => 'error',
           'msg' => "Une erreur s'est produite",
        );
      }
      return response()->json($data);
    }
  }
}
