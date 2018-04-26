@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Commandes
        </div>
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date de commande</th>
                    <th>Serveur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $key => $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->date_order}}</td>
                    <td>{{$value->waiter->first_name}}</td>
                    <td>
                      <a href="/admin/order/{{$value->id}}" class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="/admin/order/{{$value->id}}/edit" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
