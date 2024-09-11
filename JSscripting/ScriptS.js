function activador(){
	alert('entro a la funcion');	
	var input_busqueda = document.getElementById('busqueda');
	var etiquetas = document.querySelectorAll('.users');
	for(var i = 0; i < etiquetas.lenght; i++){
		var seleccion = etiquetas[i];

		if(seleccion.includes(input_busqueda)){
			seleccion.style.display = 'inline';
			alert('funciona');
		}
		else{
			seleccion.style.display = 'none';
		}
	}

}
var boton = document.getElementById('go').addEventListener('onclick' /*metodo*/, activador);