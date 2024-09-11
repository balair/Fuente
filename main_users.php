<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="guardar.php" class="form-data" method="post">
        <label for="usuario" class="label-10">Nombre de Usuario: </label>
        <input type="text" id="usuario" name="usuario" class="input-form">
        <label for="area" class="label-10">Ubicacion</label>
        <input type="text" id="area" name="area" class="input-form">
        <label for="Administrador" class="label-10">Cuenta de administrador: </label>
        <select id="adm" name="adm" class="input-form">
            <option value="" disable selected></option>
            <option value="Si">Si</option>
            <option value="no">No</option>
        </select>
        <label for="contraseña" class="label-10">Nueva clave:</label>
        <input type="text" id="contraseña" name="contraseña" class="input-form">
        <div class="buttons-a">
            <button class="btn-save">Grabar</button>
            <div class="btn-loaduser">
                <a id="load-l" href="main_users.php">Cargar otro usuario</a>
            </div>
        </div>
        <?php  if(isset($_GET["error"])){ ?>
            <p class="error"><?php echo $_GET["error"]; ?></p>
        <?php } else if(isset($_GET["alert"])) {?>
            <p class="alert"><?php echo $_GET["alert"]; ?></p>
        <?php } ?>
    </form>
    <div class="divisores">
        <p>Carga de usuario nuevo</p>
    </div>
</body>
</html>