$(document).ready(function(){


	$("#modif_btn").click(function(){

		msg = "";

		if($("#emailM").val() == "" || $("#emailM").val().indexOf('@', 0) == -1){
			msg += "El campo email está vacío o no lle va @ <br>";
			$("#emailM").addClass("error-validation");
		} else {
			$("#emailM").removeClass("error-validation");
		}

    if($("#emailMo").val() != ($("#emailM").val())){
      msg += "El campo email No coincide <br>";
      $("#emailMo").addClass("error-validation");
    } else {
      $("#emailMo").removeClass("error-validation");
    }


		if($("#contraM").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraM").addClass("error-validation");
		} else {
			$("#contraM").removeClass("error-validation");
		}
    if($("#contrao").val() != ($("#contraM").val())){
      msg += "El campo contraseña No coincide <br>";
      $("#contrao").addClass("error-validation");
    } else {
      $("#contrao").removeClass("error-validation");
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

  					location.href = 'perfil/index';
  					
  				},

  				error: function(){
  					$("#errorsM").html("Error en el envío de datos al server");
  				}

  			});
  		}
	});

});