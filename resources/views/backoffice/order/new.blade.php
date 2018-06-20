@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Créer une nouvelle commande
        </div>
        <div class="card-body">
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          {{ Form::open(array('route' => 'orders.create')) }}

              <div class="form-group">
                  {{ Form::label('date_order', 'Date de commande') }}
                  {{ Form::text('date_order', Input::old('date_order'), array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('client_id', 'Client') }}
                  <select name="client_id">
                    @foreach ($users as $client)
                      <option value="{{$client->id}}">{{$client->first_name}}</option>
                    @endforeach
                  </select>
              </div>

              <div class="form-group">
                  {{ Form::label('waiter_id', 'Serveur') }}
                  <select name="waiter_id">
                    @foreach ($users as $waiter)
                      <option value="{{$waiter->id}}">{{$waiter->first_name}}</option>
                    @endforeach
                  </select>
              </div>

              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
