
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema de facturación</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="body-login-100">
    <?php
        include "login.php";
    ?>
        <main class="wrap-login100">
            <section id="login">
            <form action="" method="post">
                <h3 class="login-title">Iniciar sesión</h3>
                <img src="img/login/login.png" class="login-form-imglogin" alt="Logo de inición de sesión">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="clave" placeholder="Contraseña">
                <p class="login-alert"><?php echo isset($alert) ? $alert : ''; ?></p>
                <input type="submit" value="INGRESAR">
            </form>
        </section>
    </main> 
</body>
</html>

