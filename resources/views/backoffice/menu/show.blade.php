@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Menu: {{ $menu->name }}
        </div>
        <div class="card-body">
          <dl class="row">
            @foreach ($menu->menuLines as $meal)
              <dt class="col-md-6">{{$meal->meal->type}}</dt>
              <dd class="col-md-6">{{$meal->meal->name}}</dd>
            @endforeach
          </dl>
        </div>
      </div>
    </div>
  </div>

@endsection
