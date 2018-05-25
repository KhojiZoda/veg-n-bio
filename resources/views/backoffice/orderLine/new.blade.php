@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Créer une nouvelle ligne de commande
        </div>
        <div class="card-body">
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          {{ Form::open(array('route' => array('orderLines.create'))) }}
              <div id="order_lines_row">
                <div class="order_lines">
                  <div class="form-group">
                    {{ Form::label('order_id', '') }}
                    {{ Form::text('order_id', $order_id, array('class' => 'form-control', 'readonly' => 'true')) }}

                    {{ Form::label('order_lines', '') }}
                    <select name="order_lines">
                      @foreach ($meals as $meal)
                        <option value="{{$meal->id}}">{{$meal->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
