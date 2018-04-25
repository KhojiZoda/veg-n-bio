@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-6">
      <div class="card card-accent-primary">
        <div class="card-header">
          {{$user_data->first_name}}
        </div>
        <div class="card-body">
          <dl class="row">
            <dt class="col-md-6">Role</dt>
            <dd class="col-md-6">{{$user_data->role}}</dd>
            <dt class="col-md-6">First Name</dt>
            <dd class="col-md-6">{{$user_data->first_name}}</dd>
            <dt class="col-md-6">Last Name</dt>
            <dd class="col-md-6">{{$user_data->last_name}}</dd>
            <dt class="col-md-6">Email</dt>
            <dd class="col-md-6">{{$user_data->email}}</dd>
            <dt class="col-md-6">Address</dt>
            <dd class="col-md-6">{{$user_data->address}}</dd>
            <dt class="col-md-6">Birthday</dt>
            <dd class="col-md-6">{{$user_data->birthday}}</dd>
            <dt class="col-md-6">Birthday</dt>
            <dd class="col-md-6">{{$user_data->birthday}}</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

@endsection
