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
    <div class="container-form register">
        <div class="informacion">
            <div class="infor">
                <h2>Bienvenido a Sabor y Arte</h2>
                <p>Descubre el lugar donde el café y la creatividad se encuentran.
                ¡Regístrate y vive la experiencia!</p>
                <input type="button" value="Inicia sesión" id="sign-in">
            </div>
        </div>  
        <div class="form-information">
             <div class="form-information-plus">
                <h2>Crear una cuenta</h2>
                <form action="../php/insertar.php" method="post" class="form">

                    <label for="nombre">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Nombres completos">
                    </label>

                    <label for="email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Correo electrónico">
                    </label>

                    <label for="direccion">
                       <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="direccion" placeholder="Dirección">
                    </label>
                   
                    <label for="pass">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pass" placeholder="Contraseña">
                      
                    </label>               
                    
                    
                      <label class="label4">
    <i class="fa-solid fa-users"></i>
    <select  class="rol" name="rol" aria-label="Default select example">
      <option selected disabled>Selecciona tu rol</option>
      <option value="cliente">Cliente</option>
    </select>
  </label>
                    <input type="submit" value="Registrarse">
                </form> 
             </div>
        </div>
    </div>



     <div class="container-form login hide">
        <div class="informacion">
            <div class="infor">
                <h2>¡Bienvenido Nuevamente!</h2>
                <p>Si aún no tienes una cuenta por favor registrese aquí</p>
                <input type="button" value="Registrarse" id="sign-up">
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