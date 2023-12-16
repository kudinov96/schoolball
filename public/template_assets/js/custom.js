

$('#searchFilter').click(function() {
    $('#show_filter').css({
        'display': 'block'
       
    });
});
$('#searchFilter2').click(function() {
    $('#show_filter').css({
        'display': 'none'
       
    });
});


/**
 *   Выделение и запоминание объявлений, отмеченных в избранное
 */

 


 function setFavorites(key, user) {

     var parentRow = document.querySelectorAll('tr[data-key="' + key + '"]')[0];

  var btn =  document.querySelector('[class="btn btn-light flex-shrink-0 me-3 ' + key + '"]');
  let elem = document.getElementById('elem');
  var count=$('#count_users').text(); 
  var mes = document.getElementById('message-resalt-favorites');
  var act = btn.getAttribute("data-act");
  var min = 0;
  var element = "min"+key;

  console.log(act);

  if (user === "") {
      alert("В избранное могут добавлять только зарегистрированные пользователи.");
      return false;
  }



  $.ajax({
      url: '/site/wishlist',
      type: 'POST',
      data: "user=" + user + "&key=" + key + "&act=" + act,
      success: function(res) {
          if (act === "add") {
              btn.setAttribute('data-act', 'del');
              btn.setAttribute('title', 'Удалить из избранного');


                document.getElementById(element).innerHTML = '<i class="bx bxs-heart opacity-50" style="color:#ff3737;"></i>';

              mes.innerHTML = "Добавлено в избранное";
              mes.style.background = '#e1ffe1';
              mes.style.display = 'block';
              setTimeout(function(){
                  mes.style.display = 'none';
                  mes.innerHTML = "";
                  mes.style.background = '';
              }, 2000);
              setTimeout(function() {
             
              }, 2000);
          }
          if (act === "del") {
              btn.setAttribute('data-act', 'add');
              btn.setAttribute('title', 'В избранное');
             
              document.getElementById(element).innerHTML = '<i class="bx bxs-heart opacity-50" style=""></i>';

              mes.innerHTML = "Удалено из избранного";
              mes.style.background = '#ffe1e1';
              mes.style.display = 'block';
              setTimeout(function(){
                  mes.style.display = 'none';
                  mes.innerHTML = "";
                  mes.style.background = '';
              }, 2000);

              setTimeout(function() {
               
              }, 2000);
          }
          if (act === "delete") {
              var parentBody = parentRow.parentElement;
              parentBody.removeChild(parentRow);
          }
      },
      error: function() {
          alert('При занесении объявления в избранное произошла ошибка, попробуйте позже');
      }
  });
}


/**
 *   notifications alerts
 */
