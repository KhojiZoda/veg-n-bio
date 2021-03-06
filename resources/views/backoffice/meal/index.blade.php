@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Plats
        </div>
        <div class="card-body">
          <table id="meals_table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix (en €)</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>Nom</th>
                <th>Prix (en €)</th>
                <th>Type</th>
                <th></th>
              </tr>
            </tfoot>
        </table>

        </div>
      </div>
    </div>
  </div>
@endsection
