@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Salariés
        </div>
        <div class="card-body">
          <table id="table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $value)
                  <tr class={{$value->status == 'archived' ? "table-secondary" : ""}}>
                    <td>{{$value->first_name}}</td>
                    <td>{{$value->last_name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td>
                    <td>
                      @if ($value->status == 'archived')
                        <span class="text-warning">Salarié archivé</span>
                      @else
                        <a href="/admin/users/{{$value->id}}" class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="/admin/users/{{$value->id}}/edit" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <button onClick="archiveUser({{$value->id}})" class="btn btn-outline-danger"><i class="fa fa-ban" aria-hidden="true"></i></button>
                      @endif
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
