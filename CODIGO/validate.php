

<?php
    include "data_base_connect.php";
    if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
        function validar($data){
            $data = trim($data); /*funcion que valida caracteres de los input, data toma valores true o false*/
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $usrname = validar($_POST["usuario"]);
        $password = validar($_POST["contraseña"]);

        if(empty($usrname) || empty($password)){
            header("Location: index.php?error= Debe ingresar algo para continuar");
            exit();
        }
        else{
            /*tener en cuenta que en un query de user solo puede aparecer un registro o ninguno*/
            $query = "SELECT * FROM usuario_new WHERE NOMBRE = '$usrname' AND PASSWORD = '$password'";
            $result_query = mysqli_query($connect, $query);
            if(mysqli_num_rows($result_query) == 1){
                $registro = mysqli_fetch_assoc($result_query);
                header("Location: main.php");
                exit();
            }
            else{
                header("Location: index.php?error= error usuario no encontrado");
            }
        }
        
    }
    else{
        header("Location: index.php");
        exit();
    }
?>
