@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Restaurants
        </div>
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $key => $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->address}}</td>
                    <td>
                      <a href="/admin/restaurant/{{$value->id}}" class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="/admin/restaurant/{{$value->id}}/edit" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>

        </div>
      </div>
    </div>
  </div>
@endsection
