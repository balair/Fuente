<?php
    $connect = new mysqli("localhost", "root", "", "ASPI"); /* string de coneccion */
    
    if($connect->connect_error){
        die("connection failed: ".mysqli_connect_error());
    }
    
?>


