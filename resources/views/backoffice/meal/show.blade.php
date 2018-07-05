@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          {{$meal->name}}
        </div>
        <div class="card-body">
          <dl class="row">
            <dt class="col-md-2">Nom</dt>
            <dd class="col-md-10">{{$meal->name}}</dd>
            <dt class="col-md-2">Prix (en €)</dt>
            <dd class="col-md-10">{{$meal->price}}</dd>
            <dt class="col-md-2">Type</dt>
            <dd class="col-md-10">{{$meal->type}}</dd>
          </dl>

          {{ Form::open(array('route' => 'mealIngredients.create')) }}

            <div class="unabled">
              {{ Form::label('meal_id', '') }}
              {{ Form::text('meal_id', $meal->id, array('class' => 'form-control', 'readonly' => 'true', "id" => "current_meal_id")) }}
            </div>
            <div class="form-group">
                {{ Form::label('ingredient_id', 'Ingrédients') }}
                <select name="ingredient_id" class="form-control col-md-3">
                  @foreach ($ingredients_all as $ingredient)
                    <option value="{{$ingredient->ingredient->id}}">{{$ingredient->ingredient->name}}</option>
                  @endforeach
                </select>
                {{ Form::submit('Ajouter', array('class' => 'btn btn-outline-primary')) }}
            </div>


          {{ Form::close() }}

          <div class="meal_ingredients">
            <h3>Ingrédients</h3>
          </div>
          <div class="list_meal_ingredients">
            @foreach ($ingredients as $ingredient)
              <div class="">
                {{$ingredient->ingredient->name}}
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
