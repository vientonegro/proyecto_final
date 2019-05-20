$(document).ready(function()
{

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


				error: function(e){

				}
			});
    	}
	});
});