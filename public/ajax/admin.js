$(document).ready(function() {
  function archiveUser(userId){
    $.ajax({
      type:'POST',
      url:'/admin/users/' + userId + '/archive',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        toastr.success('Le salarié a été archivé');
      },
      error:function(text){
        toastr.error("Une erreur s'est produite: " + text);
      },
    });
  }
});
