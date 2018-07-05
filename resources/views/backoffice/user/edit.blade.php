@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Modifié {{$user->first_name}} {{$user->last_name}}
        </div>
        <div class="card-body">
          <!-- if there are creation errors, they will show here -->
          {{ Html::ul($errors->all()) }}

          {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

              <div class="form-group">
                  {{ Form::label('first_name', 'Prénom') }}
                  {{ Form::text('first_name', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('last_name', 'Nom') }}
                  {{ Form::text('last_name', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('email', 'Email') }}
                  {{ Form::email('email', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('password', 'Mot de passe') }}
                  {{ Form::password('password', array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('password_confirmation', 'Confirmation de mot de passe') }}
                  {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('address', 'Adress') }}
                  {{ Form::text('address', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {{ Form::label('gender', 'Sexe') }}
                {{ Form::radio('gender', "Homme", $errors->has('gender') ? ['class' => "form-control is-invalid"] : ['class' => "form-control"]) }}
                {{ Form::radio('gender', "Femme", $errors->has('gender') ? ['class' => "form-control is-invalid"] : ['class' => "form-control"]) }}
              </div>

              <div class="form-group">
                  {{ Form::label('birthday', 'Date de naissance') }}
                  {{ Form::text('birthday', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('role', 'Role') }}
                  {{ Form::select('role', [
                     'admin' => 'Administrateur',
                     'employee' => 'Salarié',
                     'provider' => 'Fournisseur'],
                     $errors->has('role') ? ['class'=>"custom-select is-invalid form-control"] : ['class'=>"custom-select form-control"]
                  ) }}
              </div>

              {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
