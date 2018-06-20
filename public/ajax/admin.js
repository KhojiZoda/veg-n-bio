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

function deleteMenuLine(menuLineId){
  $.ajax({
    type: 'POST',
    url: '/admin/menuLines/' + menuLineId + '/delete',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
      menuLine_id: menuLineId
    },
    success:function(data){
      window.location.reload();
      toastr.success(data.msg);
    },
    error:function(response){
      console.log(response);
      toastr.error(response.msg);
    },
  });
}

function addMeal(menuId,menuLineId){
  var mealId = $("#meals_option option:selected")[0].value;
  if (mealId != undefined) {
    addToMenuMeal(menuId,menuLineId,mealId);
  }else{
    toastr.error("Vous devez selectionner un plat");
  }
}

function addToMenuMeal(menuId, menuLineId, mealId){
  $.ajax({
    type: 'POST',
    url: '/admin/menu/' + menuId + '/menuLines/' + menuLineId + '/meal/' + mealId + '/addMeal',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
      meal_id: mealId,
      menu_id: menuId
    },
    success:function(response){
      setTimeout(window.location.reload(), 10000);
      toastr.success(response.msg);
    },
    error:function(response){
      console.log(response);
      toastr.error(response.msg);
    },
  });
}
