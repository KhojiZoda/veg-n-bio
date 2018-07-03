@extends('backoffice.layout.application-back')

@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="card card-accent-primary">
        <div class="card-header">
          Fournisseurs
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <div class="animated fadeIn">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-people text-primary"></i>
                    </div>
                    <div class="h4 mb-0">{{$nb_visitors}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Fournisseurs</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="animated fadeIn">
                <div class="card">
                  <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                      <i class="icon-basket-loaded text-primary"></i>
                    </div>
                    <div class="h4 mb-0">{{$nb_ingredients}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">Ingredient</small>
                    <div class="progress progress-xs mt-3 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <table id="provider_table_id" class="table table-bordered">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                  <th>Prénom</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th></th>
              </tr>
            </tfoot>
        </table>

        </div>
      </div>

      <div class="card card-accent-primary">
        <div class="card-header">
          Ingrédients
        </div>
        <div class="card-body">
          {{ Html::ul($errors->all()) }}
          <table id="ingredient_index_tab" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
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
@endsection
