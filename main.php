<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASPIv1.0</title>
</head>
<body>
    <header class="header">
        <div id="logo">
            <img src="LOGO/LOGO_V1.png" alt="logo">
        </div> 
    </header>
    <img src="Imagenes/teclado_background-1-png-recorte.png" alt="teclado_background-1" id="BACK_IMG_1">
    <img src="Imagenes/teclado_background-2-png.png" alt="teclado_background-2" id="BACK_IMG_2">
    <div class="optn-menu"><!--FUNCIONA COMO CONTENEDOR, CON LO CUAL SE PUEDE HACER EL FLEXBOX-->
        <div class="optn-item"><a href="#">Incidentes Abiertos</a></div>
        <div class="optn-item"><a href="main_my.php">Mis Incidentes</a></div>
        <div class="optn-item" id="abm"><a href="#">Cargar Incidente</a></div>
        <div class="optn-item" id="smoothmovement">
            <a href="main_users.php">Alta de Usuarios</a><!--OPCION SOLO DE ADMINISTRADOR, SE DEBE OCULTAR A USUARIO COMUN-->
            <div class="dropdwn-display">
                <div class="dropdwn-item-s" id="elemnt-1"><a href="main_users.php">Carga de Usuario</a></div>
                <div class="dropdwn-item-s" id="element-2"><a href="main_searcher_user.php">Busqueda de usuario</a></div>
            </div>
        </div><!--OPCION SOLO DE ADMINISTRADOR, SE DEBE OCULTAR A USUARIO COMUN-->
    </div>
</body>
</html>