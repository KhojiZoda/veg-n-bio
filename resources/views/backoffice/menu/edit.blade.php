@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Modifier
        </div>
        <div class="card-body">
          {{ Html::ul($errors->all()) }}

          {{ Form::model($menu, array('route' => array('menu.update', $menu->id), 'method' => 'PATCH')) }}

              @include('backoffice.menu.form')

          <div class="unabled">
            {{ Form::label('menu_id', '') }}
            {{ Form::text('menu_id', $menu->id, array('class' => 'form-control', 'readonly' => 'true', "id" => "menu_id")) }}
          </div>

          <select id= "meals_option" name="meals">
            <option disabled selected value> -- select an option -- </option>
            @foreach ($meals as $meal)
              <option value="{{$meal->id}}">{{$meal->name}}</option>
            @endforeach
          </select>
          <button onClick="addMeal({{$menu->id}}, {{$menuLines->first()->id}})" class="btn btn-outline-success"><i class="fa fa-plus-square-o" aria-hidden="true"></i></button>
        </div>
              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}

          <table id="menuMeals" class="table table-striped table-bordered" width="100%" data-page-length="25">
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
                  <th>Nom</th>
                  <th>Type</th>
                  <th></th>
              </tr>
          </tfoot>
          </table>
      </div>
    </div>
  </div>
@endsection
