<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Project_v.1</title>
</head>
<body id="body_index">
    <img src="Imagenes/img1(1).png" id="IMG1">
    <img src="Imagenes/img2.png" id="IMG2">
    <div class="login">
        <form action="validate.php" class="login-form" id="form" method="post">
            <?php  if(isset($_GET["error"])){ ?>
                <p class="error"><?php echo $_GET["error"]; ?></p>
            <?php } ?>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="usuario">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contraseña">
            <button type="submit" class="log-in-button" name="btn-login">
                Login
            </button>
            <button type="button" class="forgot-password" name="r-password">
                Recuperar contraseña
            </button>
            <?php
                include("data_base_connect.php");
            ?>
        </form>
    </div>
    <script src="script.js"></script>        
</body>

