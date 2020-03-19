@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          {{ $restaurant->name }}
        </div>
        <div class="card-body">
          <dl class="row">
            <dt class="col-md-6">Restaurant</dt>
            <dd class="col-md-6">{{$restaurant->name}}</dd>
            <dt class="col-md-6">Adresse</dt>
            <dd class="col-md-6">{{$restaurant->address}}</dd>
            <dt class="col-md-6">Menu</dt>
            <dd class="col-md-6">
              <a href="/admin/menu/{{$menu->id}}">{{$menu->name}}</a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

@endsection
