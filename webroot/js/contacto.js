
$(document).ready(function(){

$("#contact").click(function(){

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

      if($("#contact-email").val() == ""){
      msg += "El campo email está vacío <br>";
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

      if(msg == ""){

    
      }
  });


});



// function validarNombre(e){
//   e.preventDefault();
 
//     var txtNombre = document.getElementById('nombre').value;
//        //Test nombre obligatorio
//     if(txtNombre == null || txtNombre.length < 3 || !/^[a-zA-Z]*$/.test(txtNombre)) {
//       document.getElementById("caja1").innerHTML ="Has de escribir minimo tres letras";
//       document.getElementById("caja1").style.color = "red";
//       document.getElementById("nombre").style.border = "1px solid red";
//     }else {
//       document.getElementById("nombre").style.border = "1px solid lightgrey";
//       document.getElementById("caja1").innerHTML ="";
//     }

// }
// function validarEmail(e){
//   e.preventDefault();

//     var txtEmail = document.getElementById('email').value;

        
//     if(txtEmail == null || txtEmail.length < 3 ){
//       document.getElementById("caja2").innerHTML ="Has de escribir minimo tres letras";
//       document.getElementById("caja2").style.color = "red";
//       document.getElementById("email").style.border = "1px solid red";
//     }else {
//       document.getElementById("email").style.border = "1px solid lightgrey";
//       document.getElementById("caja2").innerHTML ="";
//     } 
// }

// function validarMensaje(e){
//   e.preventDefault(); 

//   var txtMensaje = document.getElementById('mensaje').value;


//     // Movil
//     if(txtMensaje == null || txtMensaje.length < 9 ){

//       document.getElementById("caja4").innerHTML = "Has de escribir minimo 9 letras ";
//       document.getElementById("caja4").style.color = "red";
//       document.getElementById("mensaje").style.border = "1px solid red";
//     }else {
//       document.getElementById("mensaje").style.border = "1px solid lightgrey";
//       document.getElementById("caja4").innerHTML ="";
//     }
// }

// function validar_todo(e)
// {
//    e.preventDefault();

//   document.getElementById("mensaje").style.display = "none";
//   validarNombre(e);
//   validarEmail(e);
//   validarMensaje(e);

//   var caja1 = document.getElementById("caja1").value;
//   var caja2 = document.getElementById("caja2").value;
//   var caja4 = document.getElementById("caja4").value;

//   if (typeof(caja1) == "undefined" && typeof(caja2) == "undefined" && typeof(caja4) == "undefined")
//   {
//     var nombre = document.getElementById("nombre").value;
//     var email = document.getElementById("email").value;
//     var mensaje = document.getElementById("mensaje").value;
//     if (nombre != "" && email != ""  && mensaje != "")
//     {
//       document.getElementById("mensaje").style.display = "block";
//     }
//     document.getElementById("nombre").value = "";
//     document.getElementById("email").value = "";
//     document.getElementById("mensaje").value = "";
//   }

// }  
 
   

