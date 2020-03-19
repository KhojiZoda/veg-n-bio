@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Acheter l'ingrédient
        </div>
        <div class="card-body">
          
          <dl class="row">
            <dt class="col-md-2">Nom</dt>
            <dd class="col-md-10">{{$ingredient->name}}</dd>
            <dt class="col-md-2">Quantité</dt>
            <dd class="col-md-10">{{$ingredient->quantity}}</dd>
            <dt class="col-md-2">Prix</dt>
            <dd class="col-md-10">{{$ingredient->price}}</dd>
            <dt class="col-md-2">Fournisseur</dt>
            <dd class="col-md-10">{{$provider->first_name}} {{$provider->last_name}}</dd>

          </dl>
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          {{ Form::open(array('route' => array('history.create', Route::input('ingredient_id')))) }}
              <div id="history_row">
                <div class="history">
                  <div class="form-group">
                    {{ Form::label('quantity', 'Quantité (en kg)') }}
                    {{ Form::number('quantity', '', array('class' => 'form-control', 'onchange'=>"showPrice(".$ingredient->price.",".$ingredient->quantity.");", "id"=>"desired_quantity")) }}

                    {{ Form::label('price', 'Prix (en €)') }}
                    {{ Form::number('price', '', array('class' => 'form-control', 'readonly' => 'true', "id"=>"cal_price")) }}

                    {{ Form::label('notes', 'Remarque') }}
                    {{ Form::text('notes', '', array('class' => 'form-control')) }}

                  </div>
                </div>
              </div>
              <div id="error_ing" style="display:none">
                Vous ne pouvez pas commender plus d'ingredients que ce que propose le Fournisseur.
              </div>
            {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary', "id"=>"get_ingredient")) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
