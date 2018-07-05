@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Ajouter un plat
        </div>
        <div class="card-body">
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
          @endif

          {{ Form::open(array('route' => array('menuLines.create'))) }}
              <div id="order_lines_row">
                <div class="order_lines">
                  <div class="form-group">
                    {{ Form::label('meals', '') }}
                    <select name="meals" class="form-control">
                      @foreach ($meals as $meal)
                        <option value="{{$meal->id}}">{{$meal->name}}</option>
                      @endforeach
                    </select>
                    <div class="unabled">
                      {{ Form::label('menu_id', '') }}
                      {{ Form::text('menu_id', $menu_id, array('class' => 'form-control', 'readonly' => 'true')) }}
                    </div>

                  </div>
                </div>
              </div>
              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
        <div class="card-footer">
          @foreach ($menu_meals as $menu_meal)
            <div class="">
              {{$menu_meal->meal->name}}
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
