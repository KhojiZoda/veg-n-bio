// Menu Edit
$(document).ready(function(){
  var menuId = $('#menu_id');
  if (menuId[0]) {
    $("table#menuMeals").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getMenuMeals/" + menuId[0].value,
        "type": "GET"
      },
      "columns": [
        { "data": "menu.name" },
        { "data": "meal.name" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<button onClick='deleteMenuLine(" + data + ")'' class='btn btn-outline-danger'><i class='fa fa-times' aria-hidden='true'></i></button>"
          }
        }
      ],
      "initComplete": function(){
        $('#menuMeals tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#menuMeals').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});


// Menu Show

$(document).ready(function(){
  var menuId = $('#menu_show_id');

  if (menuId[0]) {
    $("table#menuMealsShow").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getMenuMeals/" + menuId[0].value,
        "type": "GET"
      },
      "columns": [
        { "data": "meal.name" },
        { "data": "meal.price" },
        { "data": "meal.type" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<button onClick='deleteMenuLine(" + data + ")'' class='btn btn-outline-danger'><i class='fa fa-times' aria-hidden='true'></i></button>"
          }
        }
      ],
      "initComplete": function(){
        $('#menuMealsShow tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#menuMealsShow').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});


// User Index

$(document).ready(function(){
  if ($('#users_table_id')[0]) {
    $("table#users_table_id").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getUsers",
        "type": "GET"
      },
      "columns": [
        { "data": "first_name" },
        { "data": "last_name" },
        { "data": "email" },
        { "data": "role" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<a href='/admin/users/"+ data +"' class='btn btn-outline-primary'><i class='fa fa-eye' aria-hidden='true'></i></a><a href='/admin/users/" + data + "/edit' class='btn btn-outline-success'><i class='fa fa-pencil' aria-hidden='true'></i></a><button onClick='archiveUser(" + data + ")' class='btn btn-outline-danger'><i class='fa fa-ban' aria-hidden='true'></i></button>"
          }
        }
      ],
      "initComplete": function(){
        $('#users_table_id tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#users_table_id').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});




// Provider Index

$(document).ready(function(){
  if ($('#provider_table_id')[0]){
    $("table#provider_table_id").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getProviders",
        "type": "GET"
      },
      "columns": [
        { "data": "first_name" },
        { "data": "last_name" },
        { "data": "email" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<a href='/admin/users/"+ data +"' class='btn btn-outline-primary'><i class='fa fa-eye' aria-hidden='true'></i></a><a href='/admin/users/" + data + "/edit' class='btn btn-outline-success'><i class='fa fa-pencil' aria-hidden='true'></i></a><button onClick='archiveUser(" + data + ")' class='btn btn-outline-danger'><i class='fa fa-ban' aria-hidden='true'></i></button>"
          }
        }
      ],
      "initComplete": function(){
        $('#provider_table_id tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#provider_table_id').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});

$(document).ready(function(){
  if ($('#ingredient_index_tab')[0]) {
    $("table#ingredient_index_tab").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getIngredients",
        "type": "GET"
      },
      "columns": [
        { "data": "name" },
        { "data": "price" },
        { "data": "quantity" },
        { "data": "buy_counter" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<a href='/admin/buyhistory/new/ingredient/"+ data +"' class='btn btn-outline-success'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a>"
          }
        }
      ],
      "initComplete": function(){
        $('#ingredient_index_tab tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#ingredient_index_tab').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});


$(document).ready(function(){
  if ($('#history_index_tab')[0]) {
    $("table#history_index_tab").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getHistory",
        "type": "GET"
      },
      "columns": [
        { "data": "ingredient.name" },
        { "data": "price" },
        { "data": "quantity" },
        { "data": "created_at" },
        {
          "data": "ingredient",
          "render": function(data, type, row) {
            return data.user.first_name + " " + data.user.last_name;
          }
        },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<a href='/admin/buyhistory/"+ data +"' class='btn btn-outline-primary'><i class='fa fa-eye' aria-hidden='true'></i></a>"
          }
        }
      ],
      "initComplete": function(){
        $('#history_index_tab tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#history_index_tab').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});


$(document).ready(function(){
  var provider_id = $('#current_provider_id');
  if (provider_id[0]){
    $('#minimizer').click();
    console.log(provider_id);
    $("table#provider_ingredients_index_tab").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/provider/providerIngredients/" + provider_id[0].value,
        "type": "GET"
      },
      "columns": [
        { "data": "name" },
        { "data": "price" },
        { "data": "quantity" },
        { "data": "buy_counter" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<a href='/provider/"+ data +"' class='btn btn-outline-success'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a>"
          }
        }
      ],
      "initComplete": function(){
        $('#provider_ingredients_index_tab tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#provider_ingredients_index_tab').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});


$(document).ready(function(){
  var meals = $('#meals_table_id');
  if (meals[0]){
    $("table#meals_table_id").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getMeals",
        "type": "GET"
      },
      "columns": [
        { "data": "name" },
        { "data": "price" },
        { "data": "type" },
        {
          "data": "id",
          "searchable": false,
          "orderable": false,
          "render": function(data, type, row) {
            return "<button onClick='deleteMeal(" + data + ")'' class='btn btn-outline-danger'><i class='fa fa-times' aria-hidden='true'></i></button>"
          }
        }
      ],
      "initComplete": function(){
        $('#meals_table_id tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#meals_table_id').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});

$(document).ready(function(){
  var meals = $('#reservation_table');
  if (meals[0]){
    $("table#reservation_table").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getReservations",
        "type": "GET"
      },
      "columns": [
        { "data": "name" },
        { "data": "price" },
        { "data": "type" },

      ],
      "initComplete": function(){
        $('#reservation_table tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input type="text" placeholder="Recherche '+title+'" />' );
        });

        // DataTable
        var table = $('#reservation_table').DataTable();

        // Apply the search
        table.columns().every( function () {
          var that = this;
          $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
              that.search( this.value ).draw();
            }
          });
        });
      }
    });
  }
});
