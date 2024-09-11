<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="text-box">
            <?php include ('buscar.php'); ?>
        </div>
    </div>
</body>
</html>