
$(document).ready(function(){

  $("#contacto").on("submit", function(e){

    e.preventDefault();
    var flag = true;
    msg = "";
    
    $("#msg").html(msg);

    if(flag)
    {
      document.getElementById("contacto").submit();
      msg="Mensaje enviado correctamente";
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
 
   

