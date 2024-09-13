<?php	
	include "data_base_connect.php";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id_etiqueta = $_POST["id"];
		$nombre = $_POST["usuario"];
		$adm = $_POST["adm"];
		$ubicacion = $_POST["area"];
		$password = $_POST["contraseña"];
		$admkey = 0;
		if(isset($_POST["adm"]) == "Si"){
			$admkey = 1;
		}
		$query = "UPDATE usuario_new SET NOMBRE = '$nombre', PASSWORD = '$password', UBICACION = '$ubicacion', ADMIN = '$adm' 
			WHERE ID = '$id_etiqueta'";
		$result = mysqli_query($connect, $query);
		if($result){
			header("Location: main_searcher_user.php?alert=EXITO AL MODIFICAR");
			echo "<p class='alert'>Exito al cargar</p>";
		}
		else{
			header("Location: main_searcher_user.php?error=FALLO AL MODIFICAR");
			echo "<p class='error'>Error al cargar</p>";
		}
	}
	else{
		header("Location: main_searcher_user.php?alert=REDIRIGIO");
	}
	#if(!empty($_POST["usuario"]) && !empty($_POST["adm"]) && !empty($_POST["contraseña"]) && isset($_GET["id"])){
	#	$nombre_new = $_POST["usuario"];
	#	$id = $_GET["id"];
	#	$clave_new = $_POST["contraseña"];
	#	$adm_new = $_POST["adm"];
	#	$query = "UPDATE usuario_new SET NOMBRE = '$nombre_new', ADMIN = '$adm_new', PASSWORD = '$clave_new' WHERE ID = '$id_etiqueta'";
	#	if($connect->query($query)){
	#		header("Location: main_modify_user.php?alert=Usuario_mod");	
	#		$alert = "Usuario modificado";
	#	}
	#	else{
	#		header("Location: main_modify_user.php?error=Usuario_err");
	#		$error = "Error al modificar";
	#	}
	#}
	#else{
	#	header("Location: main_modify_user.php?error=No se realizo la modificacion");
	#	$error = "Error al modificar";
	#}
?>