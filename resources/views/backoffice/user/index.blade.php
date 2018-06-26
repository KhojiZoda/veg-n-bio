@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Salariés
        </div>
        <div class="card-body">
          <table id="users_table_id" class="table table-bordered">
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

            </tbody>
            <tfoot>
              <tr>
                  <th>Prénom</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th></th>
              </tr>
            </tfoot>
        </table>

        </div>
      </div>
    </div>
  </div>
@endsection
