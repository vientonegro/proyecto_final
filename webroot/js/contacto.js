function validarNombre(e){
  e.preventDefault();
 
    var txtNombre = document.getElementById('nombre').value;
       //Test nombre obligatorio
    if(txtNombre == null || txtNombre.length < 3 || !/^[a-zA-Z]*$/.test(txtNombre)) {
      document.getElementById("caja1").innerHTML ="Has de escribir minimo tres letras";
      document.getElementById("caja1").style.color = "red";
      document.getElementById("nombre").style.border = "1px solid red";
    }else {
      document.getElementById("nombre").style.border = "1px solid lightgrey";
      document.getElementById("caja1").innerHTML ="";
    }

}
function validarApellido(e){
  e.preventDefault();

    var txtApellido = document.getElementById('apellido').value;

        //Test apellidos obligatorio
    if(txtApellido == null || txtApellido.length < 3 || !/^[a-zA-Z]*$/.test(txtApellido)){
      document.getElementById("caja2").innerHTML ="Has de escribir minimo tres letras";
      document.getElementById("caja2").style.color = "red";
      document.getElementById("apellido").style.border = "1px solid red";
    }else {
      document.getElementById("apellido").style.border = "1px solid lightgrey";
      document.getElementById("caja2").innerHTML ="";
    } 
}

function validarMovil(e){
  e.preventDefault(); 

  var txtMovil = document.getElementById('movil').value;

  var txtDNI = document.getElementById('movil').value;
  var primer_num = txtMovil.substring(0, 1);
  
    // Movil
    if(primer_num != 6 && primer_num != 7 && primer_num != 9 || txtMovil.length !=9 ){

      document.getElementById("caja4").innerHTML = "Movil incorrecto ";
      document.getElementById("caja4").style.color = "red";
      document.getElementById("movil").style.border = "1px solid red";
    }else {
      document.getElementById("movil").style.border = "1px solid lightgrey";
      document.getElementById("caja4").innerHTML ="";
    }
}

function validar_todo(e)
{
   e.preventDefault();

  document.getElementById("mensaje").style.display = "none";
  validarNombre(e);
  validarApellido(e);
  validarMovil(e);

  var caja1 = document.getElementById("caja1").value;
  var caja2 = document.getElementById("caja2").value;
  var caja4 = document.getElementById("caja4").value;

  if (typeof(caja1) == "undefined" && typeof(caja2) == "undefined" && typeof(caja4) == "undefined")
  {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var telefono = document.getElementById("movil").value;
    if (nombre != "" && apellido != ""  && movil != "")
    {
      document.getElementById("mensaje").style.display = "block";
    }
    document.getElementById("nombre").value = "";
    document.getElementById("apellido").value = "";
    document.getElementById("movil").value = "";
  }

}  
 
   

