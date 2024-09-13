<?php
    include "data_base_connect.php";
    if(isset($_POST["busqueda"])){
        function valido($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        $nombre = valido($_POST["busqueda"]);
        $query = "SELECT * FROM usuario_new WHERE NOMBRE LIKE '$nombre'";
        $result_query = mysqli_query($connect, $query);
        if($result_query->num_rows > 0){
            while($row = $result_query -> fetch_assoc()){
                $name = $row["NOMBRE"];
                $id = $row["ID"];
            }
            echo "<a href='main_modify_user.php' id='$id' class='users'> $name $id </a>"; #ACA LO MISMO, Y TODO ESTE BLOQUE CORRESPONDE A LA BUSQUEDA INDIVIDUAL!!!!!
        }
        else{
            echo "<a href='#' class='users'> No hubo resultados.. </a>";
        }
    }
    else{
        $query = "SELECT * FROM usuario_new";
        $result_query = mysqli_query($connect, $query);
        if($result_query->num_rows > 0){
            while($row = $result_query->fetch_assoc()){
                $name = $row["NOMBRE"];
                $id = $row["ID"];
                echo "<a href='main_modify_user.php?id=$id' id='$id' class='users'> $name </a>"; #QUE TOME EL ID DIRECTO DE LA BASE Y LO ASOCIE AL DATO!!!!
            }
        }
        else{
            echo "<a href='#' class='users'> No hubo resultados.. </a>";
        } 
    }
    $connect->close();
?>