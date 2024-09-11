<?php 
    include "data_base_connect.php";
    
    if(!empty($_POST["usuario"]) && !empty($_POST["contraseña"]) && !empty($_POST["area"]) && !empty($_POST["adm"])){
        #Codigo...
        $usr = ($_POST["usuario"]);
        $pswr = ($_POST["contraseña"]);
        $area = ($_POST["area"]);
        $adm = $_POST["adm"];
        $admkey = 0;
        $query = "SELECT * FROM usuario_new WHERE NOMBRE = '$usr'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) == 1){
            header ("Location: main_users.php?error= Usuario existente");
        }
        else{
            if($adm == "Si"){
                $admkey = 1;
            }
            $query = "INSERT INTO usuario_new (NOMBRE, PASSWORD, ADMIN) VALUES ('$usr', '$pswr', '$admkey')";
            if(mysqli_query($connect, $query)){
                header("Location: main_users.php?alert= Usuario cargado");
                exit();
    
            }
            else{
                header("Location: main_users.php?error= Debe completar todos los campos");
                exit();
            }
        }
    }
    else{
        header("Location: main_users.php?error= Los campos deben estar completos");
    }
    
?>