$(document).ready(function(){
  var menuId = $('#menu_id');

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
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
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
});
