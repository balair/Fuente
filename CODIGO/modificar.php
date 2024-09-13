<?php
	include "data_base_connect.php";
	if(!empty($_GET['id'])){
		$id_etiqueta = $_GET['id'];
		$query = "SELECT * FROM usuario_new WHERE ID = '$id_etiqueta'";
		$resultado = mysqli_query($connect, $query);
		if($resultado->num_rows == 1){
			$data = $resultado->fetch_assoc();
			$nombre = $data["NOMBRE"];
			$adm = $data["ADMIN"];
			$id = $data["ID"];
		}
		else{
			header("Location: main_modify_user.php?error=No_data_found");	
		}
	}
	else{
		if(!empty($_POST["usuario"]) && !empty($_POST["area"]) && !empty($_POST["adm"]) && !empty($_POST["contraseña"])){
			$nombre = $_POST["usuario"];
			$area = $_POST["area"];
			$adm = $_POST["adm"];
			$contraseña = $_POST["contraseña"];
			$query = "UPDATE usuario_new SET NOMBRE = '$nombre', ADMIN = '$adm', UBICACION = '$area', PASSWORD = '$contraseña' 
				WHERE ID = '$id_etiqueta'";
			$resultado = $connect->query($query);
			if($resultado == TRUE){
				header("Location: main_modify_user.php?alert=EXITO");
				exit();
			}
			else{
				header("Location: main_modify_user.php?error=FALLO");
				exit();
			}
		}
		
	}
	
?>