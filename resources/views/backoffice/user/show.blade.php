@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="card card-accent-primary">
        <div class="card-header">
          {{$user_data->first_name}}
        </div>
        <div class="card-body">
          <dl class="row">
            <dt class="col-md-3">First Name</dt>
            <dd class="col-md-6">{{$user_data->first_name}}</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

@endsection
