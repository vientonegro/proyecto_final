$(document).ready(function(){


	$("#modif_btn").click(function(){

		msg = "";

    if($("#email").val() == ""){
      msg += "El campo email está vacío <br>";
      $("#email").addClass("error-validation");
    } else {
      $("#email").removeClass("error-validation");
    }
		if($("#emailM").val() == ""){
			msg += "El campo email está vacío <br>";
			$("#emailM").addClass("error-validation");
		} else {
			$("#emailM").removeClass("error-validation");
		}
    if($("#contra").val() == ""){
      msg += "El campo contraseña está vacío <br>";
      $("#contra").addClass("error-validation");
    } else {
      $("#contra").removeClass("error-validation");
    }
		if($("#contraM").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraM").addClass("error-validation");
		} else {
			$("#contraM").removeClass("error-validation");
		}

  		$("#errorsM").html(msg);

  		if(msg == ""){

  			$.ajax({

          type: 'post',
          url: 'modificar/modi',
          data: $("#modif_btn").serialize(),
          dataType: 'json',

  				beforeSend: function(){
  					$("#errorsM").html("Enviando datos...");
  				},

  				success: function(data){

  					$("#errorsM").html(data);

  					setTimeout(function(){ location.href = 'modificar/index'; }, 3000);
  					
  				},

  				error: function(){
  					$("#errorsM").html("Error en el envío de datos al server");
  				}

  			});
  		}
	});

});