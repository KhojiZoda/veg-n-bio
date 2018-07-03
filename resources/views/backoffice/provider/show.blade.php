@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          {{$provider->first_name}}
        </div>
        <div class="card-body">
          <dl class="row">
            <dt class="col-md-6">First Name</dt>
            <dd class="col-md-6">{{$provider->first_name}}</dd>
            <dt class="col-md-6">Last Name</dt>
            <dd class="col-md-6">{{$provider->last_name}}</dd>
            <dt class="col-md-6">Email</dt>
            <dd class="col-md-6">{{$provider->email}}</dd>
            <dt class="col-md-6">Address</dt>
            <dd class="col-md-6">{{$provider->address}}</dd>
            <dt class="col-md-6">Birthday</dt>
            <dd class="col-md-6">{{$provider->birthday}}</dd>
          </dl>
          <div class="unabled">
            {{ Form::label('provider_id', '') }}
            {{ Form::text('provider_id', $provider->id, array('class' => 'form-control', 'readonly' => 'true', "id" => "current_provider_id")) }}
          </div>
          <div class="card card-accent-primary">
            <div class="card-header">
              <div class="">
                Ingrédients
              </div>
              <a href="/provider/{{$provider->id}}/ingredient/new">
                <i class="icon-plus"></i>
                Ajouter un ingrédient
              </a>
            </div>
            <div class="card-body">
              {{ Html::ul($errors->all()) }}
              <table id="provider_ingredients_index_tab" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix (en €/kg)</th>
                        <th>Quantité (en Kg)</th>
                        <th>Nombre d'achat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Nombre d'achat</th>
                    <th></th>
                  </tr>
                </tfoot>
            </table>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
