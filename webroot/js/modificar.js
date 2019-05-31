$(document).ready(function()
{


	$("#modif_btn").click(function(){

		msg = "";

		if($("#emailM").val() == "" || $("#emailM").val().indexOf('@', 0) == -1){
			msg += "El campo email está vacío o no lle va @ <br>";
			$("#emailM").addClass("error-validation");
		} else {
			$("#emailM").removeClass("error-validation");
		}

    // if($("#emailMo").val() != ($("#emailM").val())){
    //   msg += "El campo email No coincide <br>";
    //   $("#emailMo").addClass("error-validation");
    // } else {
    //   $("#emailMo").removeClass("error-validation");
    // }


		if($("#contraM").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraM").addClass("error-validation");
		} else {
			$("#contraM").removeClass("error-validation");
		}


    //   if($("#contraMO").val() != ($("#contraM").val())){
    //   msg += "El campo contraseña NO coincide <br>";
    //   $("#contraMO").addClass("error-validation");
    // } else {
    //   $("#contraMO").removeClass("error-validation");
    // }

  		$("#errorsM").html(msg);

  		if(msg == "")
      {

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


 // subir arriba

  
$(document).ready(function(){
 
  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 3500);
  });
 
  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);
    }
  });
 
});