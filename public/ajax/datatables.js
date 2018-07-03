// Menu Edit
$(document).ready(function(){
  var menuId = $('#menu_id');
  if (menuId != undefined) {
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

  if (menuId != undefined) {
    $("table#menuMealsShow").dataTable({
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
      },
      "ajax": {
        "url": "/admin/datatables/getMenuMeals/" + menuId[0].value,
        "type": "GET"
      },
      "columns": [
        { "data": "id" },
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
});




// Provider Index

$(document).ready(function(){
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
});

$(document).ready(function(){
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
          return "<a href='/admin/buyhistory/new/ingredient/"+ data +"' class='btn btn-outline-primary'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a>"
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
});