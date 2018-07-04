@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Créer un nouveau ingrédient
        </div>
        <div class="card-body">
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          {{ Form::open(array('route' => array('provider.create', $provider_id))) }}

              @include('backoffice.provider.form')

              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
