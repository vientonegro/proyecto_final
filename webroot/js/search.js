$(document).ready(function(){

	$("#lupa").on("keypress", function(e)
	{
		if(e.which == 13) 
		{
						// recoger la letra del input
			// la funcion ajax url: php/controller.php para ejecutar

			//dentro del ssuces hacemos un bucle para contar, usamos el divcontent
			var dato = JSON.stringify($("#lupa").val());

			$.ajax({
				type: "post",
				async:false,
				dataType: "json",
				url: "search/index",

				data: "dato="+dato,

				success: function(data){
					var divContent = "";
					for(var i = 0; i<data.length; i++)
					{
						divContent+='<div>';
							divContent+='<p>'+data[i]["usuarios_usuario"]+'</p>';
							divContent+='<p>'+data[i]["titulo"]+'</p>';
						divContent+='</div>';
					}
					$("main").html(divContent)="";
				},
				error: function(e){

				}
			});
    	}
	});
});