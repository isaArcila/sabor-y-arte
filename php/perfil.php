
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="../style/style.css">
</head>
<body class="index">


  <div class="background">

        <a href="../php/admin.php" class="logo-link">
             <img src="../img/logo.png" alt="Sabor y Arte" class="logoo">
                </a>

                               
    <header class="header">

        <div class="menu container">
                        <input type="checkbox" id="menu">
            <label for="menu"><img src="../img/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbarr">
                <ul style="position:relative; left:100px;">
                    <li class="li2"><a href="../php/admin.php">Inicio</a></li>
                    <li class="li2"><a href="../php/productos2.php">Productos</a></li>
                    <li class="li2"><a href="../php/start-invent.php">Inventario</a></li>
                    <li><a href="../php/pedidos.php">Pedidos</a></li>
                    <li><a href="../php/form.php">Subir</a></li>
                    <li><a href="../php/tablas.php">Tablas</a></li>
                    <li><a href="../php/forms.php">Registro</a></li>
                    <li class="menu-perfil"><a href="../php/perfil.php">Mi Perfil</a></li>
                </ul>
            </nav>
        </div>
      </div>
    </header>


<div class="perfil-container">
    <?php
    session_start();

    $nombre    = $_SESSION['nombre']    ?? '';
    $email     = $_SESSION['email']     ?? '';
    $direccion = $_SESSION['direccion'] ?? '';
    $telefono  = $_SESSION['telefono']  ?? ''; 
    $pass  = $_SESSION['pass']  ?? ''; 
    $rol       = $_SESSION['rol']       ?? '';
    ?>

    <h2>Hola <?php echo htmlspecialchars($nombre); ?></h2>
    <p style="text-transform:capitalize; color:#8b3a2c;"><?php echo htmlspecialchars($rol); ?></p>

    <div class="tarjeta">
        <h3>Información personal</h3>

    <form action="guardar_campo.php" method="POST">
        <input type="hidden" name="campo" value="email">
        <label>Email:</label>
        <input type="email" id="email-input" name="valor" value="<?php echo $_SESSION['email']; ?>" disabled style="background-color:transparent; border:none; font-size:16px;">
        <button type="button" class="btn" onclick="editarCampo('email')">Editar</button>
        <button type="submit" class="btn" id="guardar-email" style="display:none;">Guardar</button>
    </form>



  
    <form action="guardar_campo.php" method="POST">
        <input type="hidden" name="campo" value="direccion">
        <label>Dirección:</label>
        <input type="text" id="direccion-input" name="valor" value="<?php echo $_SESSION['direccion']; ?>" disabled style="background-color:transparent; border:none; font-size:16px;">
        <button type="button" class="btn" onclick="editarCampo('direccion')">Editar</button>
        <button type="submit" class="btn" id="guardar-direccion" style="display:none;">Guardar</button>
    </form>



    
    <form action="guardar_campo.php" method="POST">
        <input type="hidden" name="campo" value="telefono">
        <label>Teléfono:</label>
        <input type="text" id="telefono-input" name="valor" value="<?php echo $_SESSION['telefono']; ?>" disabled style="background-color:transparent; border:none; font-size:16px;">
        <button type="button" class="btn" onclick="editarCampo('telefono')">Editar</button>
        <button type="submit" class="btn" id="guardar-telefono" style="display:none;">Guardar</button>
    </form>

</div>

    

      
<div class="tarjeta">
  <h3>Seguridad</h3>


  <form action="guardar_campo.php" method="POST">
    <input type="hidden" name="campo" value="pass">
    <label>Contraseña:</label>
    <input type="password" 
           id="pass-input" 
           name="valor" 
           value="<?php echo $_SESSION['pass']; ?>" 
           disabled 
           style="background-color:transparent; width:130px; border:none; font-size:16px;">
           
    <i id="toggle-pass" 
       class="fa-solid fa-eye"
       onclick="togglePassword()" 
       style="cursor:pointer; font-size:17px; position:relative; left:5px;"></i>

    <br><button type="button" class="btn" onclick="editarCampo('pass')">Editar</button>
    <button type="submit" class="btn" id="guardar-pass" style="display:none;">Guardar</button>
</form>
</div>



<a href="../php/cerrar_sesion.php"><button>Cerrar sesión</button></a>
  </div>
</div>

 <footer class="footer">
  <div class="footer-container">

    <div class="link">
      <h3>Sabor y Arte</h3>
      <div class="socials">
        <a href="https://www.instagram.com/saborartesonson/" target="_blank"><img src="../img/instagram.png" alt="Instagram" class="icon"></a>
        <a href="https://www.facebook.com/sabor.arce/" target="_blank"><img src="../img/facebook2.png" alt="Facebook" class="icon"></a>
        <a href="https://wa.me/573114728603"><img src="../img/whatsapp.png" alt="WhatsApp" class="icon"></a>
      </div>
    </div>

    <div class="link">
      <h3>Menú</h3>
      <ul>
        <li><a href="../php/admin.php">Inicio</a></li>
        <li><a href="../php/productos4.php">Productos</a></li>
        <li><a href="../php/start-invent.php">Inventario</a></li>
        <li><a href="../php/pedidos.php">Pedidos</a></li>
        <li style="position:relative; top:-108px; left:120px;"><a href="../php/form.php">Subir</a></li>
        <li style="position:relative; top:-108px; left:120px;"><a href="../php/tablas.php">Tablas</a></li>
        <li style="position:relative; top:-108px; left:120px;"><a href="../php/forms.php">Registro</a></li>
        <li style="position:relative; top:-108px; left:120px;"><a href="../php/perfil.php">Perfil</a></li>
      </ul>
    </div>

    
    <div class="link">
      <h3>Contacto</h3>
      <ul>
        <li><a href="https://maps.app.goo.gl/tuUbicacion" target="_blank">Sonsón, Antioquia</a></li>
        <li><a href="mailto:contacto@saboryarte.com">contacto@saboryarte.com</a></li>
        <li><a href="tel:+573001234567">+57 300 123 4567</a></li>
      </ul>
    </div>

   
    <div class="link">
      <h3>Horarios</h3>
      <ul>
        <li>Lunes a Viernes: 8:00 AM – 9:00 PM</li>
        <li>Sábados: 8:00 AM – 9:00 PM</li>
        <li>Domingos: 8:00 AM – 8:00 PM </li>
      </ul>
    </div>

  <div class="footer-bottom">
    <p style="position: relative; left: 450px; top: 15px;">&copy; <span id="year"></span> Sabor y Arte. Todos los derechos reservados.</p>
  </div>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</footer>



<script src="../javascript/perfil.js"></script>
</body>
</html>
