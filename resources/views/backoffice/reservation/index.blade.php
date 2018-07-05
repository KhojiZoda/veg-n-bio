@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Reservation
        </div>
        <div class="card-body">
          <table id="reservation_table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Reservator</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Nombre de personne</th>
                    <th>Restaurant</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>Reservator</th>
                <th>Email</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Nombre de personne</th>
                <th>Restaurant</th>
              </tr>
            </tfoot>
        </table>

        </div>
      </div>
    </div>
  </div>
@endsection
