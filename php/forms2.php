<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Inicio de Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="body-registro">

     <div class="container-form">
        <div class="informacion">
            <div class="infor">
                <h2>¡Bienvenido Nuevamente!</h2>
                <p>Si aún no tienes una cuenta por favor registrese aquí</p>
                <a href="../php/forms.php"><input type="button" value="Registrarse" id="sign-up"></a>
            </div>
        </div>  
        <div class="form-information">
             <div class="form-information-plus">
                <h2>Iniciar Sesión</h2>
                
                <form action="../php/validacion.php" method="post" class="form">

                    <label for="nombre">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Nombres completos">
                    </label>

                    <label for="password">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pass" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar sesión">
                </form>
             </div>
        </div>
    </div>

    <script src="../javascript/registro.js"></script>
</body>
</html>