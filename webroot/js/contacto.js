
$(document).ready(function(){

$("#contact-btn").on("submit", function(e){

    e.preventDefault();
    var flag = true;
    msg = "";
      if($("#contact-name").val() == ""){
      msg += "El campo nombre está vacío <br>";
      $("#contact-name").addClass("error-validation");
    } else {
      $("#contact-name").removeClass("error-validation");
    }
      if($("#contact-apellido").val() == ""){
      msg += "El campo apellido está vacío <br>";
      $("#contact-apellido").addClass("error-validation");
    } else {
      $("#contact-apellido").removeClass("error-validation");
    }

      if($("#contact-email").val() == "" || $("#contact-email").val().indexOf('@', 0) == -1)
    {
      msg += "El campo email está vacío o falta la @ <br>";
      $("#contact-email").addClass("error-validation");
    } else {
      $("#contact-email").removeClass("error-validation");
    }
      if($("#contact-message").val() == ""){
      msg += "El campo mensaje está vacío <br>";
      $("#contact-message").addClass("error-validation");
    } else {
      $("#contact-message").removeClass("error-validation");
    }

      $("#contact-results").html(msg);

    if(flag)
    {
      document.getElementById("contact").submit();
    }
  });


});

 
   

