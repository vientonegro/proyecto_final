
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



//Categoria
var pos_actual = 6;

$(document).ready(function(){

	$("span.more").on("click", function(){
		var cat_actual = $( this ).data( "cat" );
		// console.log(cat_actual);
		get_recent(cat_actual);
	});

});


function get_recent(cat_actual)
{
	
	$.ajax({
		type: "post",
		dataType: "json",
		url: url+"producto/recent",
		data: "pos="+pos_actual + "&cat="+cat_actual,
		beforeSend: function(){
			$(".loading>img").show();
			$(".more").hide();
		},
		success: function(data){
			
			pos_actual+=3;
			cat_actual+=0;
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
//Ordenar categorias
// var URLactual = window.location.href;

// var URLactual = jQuery(location).attr('href');
$(document).ready(function(){
		
	$("#ord").on("change", function()
	{	
		var type = $(this).val();
		var cat = $(this).attr("data-cat-select");
		order(type, cat);
	});

});

// -----home
function get_recentHome()
{
	$.ajax({
		type: "post",
		dataType: "json",
		url: url+"home/recent",
		data: "pos="+pos_actual,

		success: function(data){
			pos_actual+=6;
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
//-------------Historial
function getHist()
{
	$.ajax({
		type: "post",
		dataType: "json",
		url: url+"historial/recent",
		data: "pos="+pos_actual,

		success: function(data){
			pos_actual+=6;
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
//-----------buscar
$(document).ready(function(){



	$("#buscar").on("keypress", function(e)
	{
		if(e.which == 13) 
		{

			var dato = JSON.stringify($("#buscar").val());
			// coge el dato de la funcion
			console.log(dato);


				$.ajax({
					type: "post",
					dataType: "json",
					url: "/proyecto_final/search/recent",
					data: "pos="+dato,
					
					success: function(data){
						// pos_actual+=6;
						if(data.length>0)
						{
							$(".content").append(data);
							
						}
						
					},
					error: function(e){

					}
				});
		}
	});
});
// -----Insertar


		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blah')
		                .attr('src', e.target.result)
		                .css("display", "block");
		        };

		        reader.readAsDataURL(input.files[0]);
		    }
		}


		function order(type, cat)
		{
			$.ajax({
			type: "post",
			dataType: "json",
			url: url+"producto/ordenar",
			data: "type="+type+"&cat="+cat,

			success: function(data){
				$(".content").html(data);
			},
			error: function(e){

			}
		});
		}
	
$(document).ready(function(){

	$("#insertar").on("submit", function(e){

		e.preventDefault();
		var flag = true;
		msg = "";
		
		if($("#categoria").val()=="")
		{	msg += "Escoge una categoria  <br>";
			$("#categoria").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#categoria").css("border", "solid 1px green");
		}
		if($("#titulo").val()=="")
		{	msg += "Introduce un titulo  <br>";
			$("#titulo").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#titulo").css("border", "solid 1px green");
		}

		if($("#descripcion").val()=="")
		{	msg += "La descripcion del Artículo está vacío <br>";
			$("#descripcion").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#descripcion").css("border", "solid 1px green");
		}
		if($("#precio").val()=="")
		{	msg += "El precio del Artículo está vacío <br>";
			$("#precio").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#precio").css("border", "solid 1px green");
		}

		if($("#user-img-file").val()=="")
		{	msg += "Escoge una imagen <br>";
			$("#user-img-file").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#user-img-file").css("border", "solid 1px green");
		}
		if($("#usuario").val()=="" )
		{	msg += "El usuario del Artículo está vacío <br>";
			$("#usuario").css("border", "solid 1px red");
			flag = false;
		}
		else
		{	msg += "";
			$("#usuario").css("border", "solid 1px green");
		}


		$("#msg").html(msg);

		if(flag)
		{
			document.getElementById("insertar").submit();
		}

	});

});


// --------Login--Registro

$(document).ready(function(){

	$("#registro span").click(function()
	{
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioL").removeClass("error-validation");
		$("#contraL").removeClass("error-validation");
		$("#login").css("display","block");
		$("#registro").css("display","none");
		
	});	
	$("#login span").click(function()
	{
		$("#errorsR").html("");
		$("#errorsL").html("");
		$("input[type=text]").val("");
		$("input[type=password]").val("");
		$("#usuarioR").removeClass("error-validation");
		$("#contraR").removeClass("error-validation");
		$("#emailR").removeClass("error-validation");	
		$("#login").css("display","none");
		$("#registro").css("display","block");
	});
	
	$("#registrar").on("click", function()
	{
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
		if($("#emailR").val() == ""){
			msg += "El campo contraseña está vacío <br>";
			$("#emailR").addClass("error-validation");
		} else {
			$("#emailR").removeClass("error-validation");
		}

  		$("#errorsR").html(msg);

  		if(msg == "")
  		{
  			
  			$.ajax({

  				type: 'post',
  				url: 'registro/usuario',
  				data: $("#registro").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsR").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorsR").html(data);

  					if(data == 'Registo correcto')
  					{
  						location.href="login/index";

  					}
  				},

  				error: function(){
  					$("#errorsR").html("Error en el envío de datos al server");
  				}

  			});

  		}
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
  					
  				type: 'post',
  				url: 'login/usuario',
  				data: $("#login").serialize(),
  				dataType: 'json',

  				beforeSend: function(){
  					$("#errorsL").html("Enviando datos...");
  				},

  				success: function(data){
  					$("#errorsL").html(data);
  					if(data == "Login correcto")
  					{
  						location.href="home/index";
  					}
  					
  				},

  				error: function(){
  					$("#errorsL").html("Error en el envío de datos al server");
  				}

  			});
  		}
	});

});