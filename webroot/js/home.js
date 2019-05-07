
	// Lupa y input
	function buscar()
	{
    	document.getElementById("buscar").style.transform = "translateX(0)";
    	document.getElementById("buscar").focus();
	}

	function hide_input()
	{
    	document.getElementById("buscar").style.transform = "translateX(100%)";
    	document.getElementById("buscar").value = "";
	}

	function valida(e)
	{
    	if (e.keyCode == 13 || e.keyCode == 27)
    	{
        document.getElementById("buscar").style.transform = "translateX(100%)";
    	}
	}

var pos_actual = 4;

$(document).ready(function(){

	$("span.more").on("click", function(){
		get_recent();
	});

});

function get_recent()
{
	$.ajax({
		type: "post",
		dataType: "json",
		url: url+"home/recent",
		data: "pos="+pos_actual,
		beforeSend: function(){
			$(".loading>img").show();
			$(".more").hide();
		},
		success: function(data){
			pos_actual+=4;
			if(data.length>0)
			{
				$(".content").append(data);
				$(".more").show();
			}
			else
			{
				$("p.nomore").html("No hay más resultados");
			}
			
			$(".loading>img").hide();
		},
		error: function(e){

		}
	});
}

// --------Login--Registro

$(document).ready(function(){

	$("#registro span").click(function(){
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioL").removeClass("error-validation");
		$("#contraL").removeClass("error-validation");
		$("#login").css("display","block");
		$("#registro").css("display","none");
		
	});	
	$("#login span").click(function(){
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioR").removeClass("error-validation");
		$("#contraR").removeClass("error-validation");
		$("#login").css("display","none");
		$("#registro").css("display","block");
	});
	
	$("#registrar").on("click", function(){
console.log("Registrar");
		msg = "";

		if($("#usuarioR").val() == ""){
			msg += "El campo usuario está vacío <br>";
			$("#usuarioR").addClass("error-validation");
		} else {
			$("#usuarioR").removeClass("error-validation");
		}
		if($("#contraR").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraR").addClass("error-validation");
		} else {
			$("#contraR").removeClass("error-validation");
		}

  		$("#errorsR").html(msg);

  		if(msg == ""){
  			
  			$.ajax({

  				type: 'post',
  				url: 'registro/registro',
  				data: $("#registro").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsR").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorsR").html(data);
  				},

  				error: function(){
  					$("#errorsR").html("Error en el envío de datos al server");
  				}

  			});

  		}
	});

	$("#borrar").click(function(){
		$("#registro")[0].reset();
	});	


	$("#loginB").click(function(){

		msg = "";

		if($("#usuarioL").val() == ""){
			msg += "El campo usuario está vacío <br>";
			$("#usuarioL").addClass("error-validation");
		} else {
			$("#usuarioL").removeClass("error-validation");
		}
		if($("#contraL").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#contraL").addClass("error-validation");
		} else {
			$("#contraL").removeClass("error-validation");
		}

  		$("#errorsL").html(msg);

  		if(msg == ""){

  			$.ajax({
  					// cambiar url
  				type: 'post',
  				url: 'login/login',
  				data: $("#login").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsL").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorsL").html(data);
  				},

  				error: function(){
  					$("#errorsL").html("Error en el envío de datos al server");
  				}

  			});
  		}
	});

	$("#borrar").click(function(){
		$("#registro")[0].reset();
	});	
});