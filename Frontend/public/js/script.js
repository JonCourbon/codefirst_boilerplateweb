let API_PATH="http://localhost/boilerplateweb/API/dist/";

$( document ).ready(function() {
  $(".savoirplus").click(function () { 
    var id = $(this).data("id");
    $.get(API_PATH+"getActeur.php",{ id: id}, function(data, status){
      alert("Infos: "+data);
    });
  });
});