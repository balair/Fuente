function activador(id){
	$.ajax({
		type: 'POST',
		url: 'modificar.php',
		data: {id_seleccionado: id},
		success: function(response){
			console.log(response);
		}
	});
}
