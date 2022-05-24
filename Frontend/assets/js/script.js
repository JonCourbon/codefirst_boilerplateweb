$( document ).ready(function() {
  $(".savoirplus").click(function () { 
    var id = $(this).data("id");
    $.get("API/dist/getActeur.php",{ id: id}, function(data, status){
      alert("Infos: "+data);
    });
  });
});