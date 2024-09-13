<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="obsoleto.js"></script>
    <title>ASPIv0.1</title>
</head>
<body>
<header class="header">
        <div id="logo">
            <img src="LOGO/LOGO_V1.png" alt="logo">
        </div>
        <div class="dropdown">
            <button class="dropdownbtn">
                <img src="LOGO/menu_icon_v1.png" alt="menuimage">
            </button>
            <div class="dropdown-content">
                <a href="#">Incidentes abiertos</a>
                <a href="#">Mis incidentes</a>
                <a href="#">Todos los incidentes</a>
                <a href="#">Cargar incidente</a>
                <a href="#">Buscar Incidentes</a>
                <a href="#">Cambiar contraseña</a>
            </div>
        </div>
    </header>
    <div class="form-type-s">
        <div class="divisor-b">
            <p>Seleccione el usuario a modificar</p>
        </div>
        <form id="search-form" method="post"> 
        	<input type="text" id="busqueda" placeholder="Buscar..." class="searchbar-1" name="busqueda">
        	<div class="text-box">
            	<?php include ('buscar.php'); ?>

        	</div>
    	</form>
        <?php if(isset($_GET["alert"])){ ?>
            <p class="alert"> <?php echo $_GET["alert"] ?> </p>
        <?php }else if(isset($_GET["error"])){ ?>
            <p class="error"> <?php echo $_GET["error"] ?> </p>
        <?php } ?>
    </div>
</body>
</html>