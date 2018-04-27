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

          {{ Form::open(array('url' => 'orders/new')) }}

              <div class="form-group">
                  {{ Form::label('date_order', 'Date de commande') }}
                  {{ Form::text('date_order', null, array('class' => 'form-control')) }}
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
                  {{ Form::label('server_id', 'Serveur') }}
                  <select name="server_id">
                    @foreach ($users as $waiter)
                      <option value="{{$waiter->id}}">{{$waiter->first_name}}</option>
                    @endforeach
                  </select>
              </div>

              <div id="order_lines_row">
                <div class="order_lines">
                  <div class="form-group">
                    {{ Form::label('order_lines', '') }}
                    <select name="order_lines">
                      @foreach ($meals as $meal)
                        <option value="{{$meal->id}}">{{$meal->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <button type="button" name="button" onClick="addOrderLine()">Ajouter un plat</button>
              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
