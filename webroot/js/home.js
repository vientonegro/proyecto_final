
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