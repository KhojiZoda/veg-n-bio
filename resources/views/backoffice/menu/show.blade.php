@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Menu: {{ $menu->name }}
        </div>
        <div class="card-body">
          <table id="menuMealsShow" class="table table-striped table-bordered" width="100%" data-page-length="25">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>
                  <th>#</th>
                  <th>Type</th>
                  <th></th>
              </tr>
          </tfoot>
          </table>
          <div class="unabled">
            {{ Form::label('menu_id', '') }}
            {{ Form::text('menu_id', $menu->id, array('class' => 'form-control', 'readonly' => 'true', "id" => "menu_show_id")) }}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
