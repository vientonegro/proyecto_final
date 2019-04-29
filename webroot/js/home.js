
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

   // Slider

	window.addEventListener('load', function(){
		console.log('el contenido ha cargado!');

		var imagenes = [];

		imagenes[0] = '/proyecto_final/webroot/img/1.jpg';
		imagenes[1] = '/proyecto_final/webroot/img/9.jpg';
		imagenes[2] = '/proyecto_final/webroot/img/hea.jpg';

		var indiceImagenes = 0;

		function cambiarImagenes(){

			document.slider.src = imagenes[indiceImagenes];

			if(indiceImagenes < 2){
				indiceImagenes++;
			}else{
				indiceImagenes = 0;
			}
		}

		setInterval(cambiarImagenes, 3000);

	});