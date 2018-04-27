function archiveUser(userId){
  $.ajax({
    type:'POST',
    url:'/admin/users/' + userId + '/archive',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success:function(data){
      window.location.reload();
      toastr.success('Le salarié a été archivé');
    },
    error:function(response){
      console.log(response);
      toastr.error("Une erreur s'est produite: " + response);
    },
  });
}
function addOrderLine(){
  var newOrderLine = $('#order_lines_row .order_lines:first-child').html();
  console.log(newOrderLine);
  $('#order_lines_row').append(newOrderLine);
}
