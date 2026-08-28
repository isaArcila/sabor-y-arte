<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panes</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="index">

    <div class="background">

        <a href="../php/empleado.php" class="logo-link">
             <img src="../img/logo.png" alt="Sabor y Arte" class="logoo">
                </a>

                               
    <header class="header">

        <div class="menu container">
                        <input type="checkbox" id="menu">
            <label for="menu"><img src="../img/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbarr">
                <ul style="position:relative; left:180px; ">
                  <li><a href="../php/empleado.php">Inicio</a></li>
                    <li><a href="../php/productos3.php">Productos</a></li>
                    <li><a href="../php/pedidos2.php">Pedidos</a></li>
                    <li><a href="../php/forms.php">Registro</a></li>
                                <li class="menu-perfil">
                        <a href="../php/perfil-empl.php">Mi Perfil</a>
                </li>
            </ul>
            </nav>
        </div>
      </div>
    </header>



    <div class="card-container">
  <?php
    include "conexion.php";
    $query = mysqli_query($conn, "SELECT * FROM productos WHERE categoria='pan'");
    while ($consultar = mysqli_fetch_array($query)) {
  ?>
  <div class="custom-card">
    <?php echo '<img class="card-img" height="250"
      src="data:image/jpg;base64,' . base64_encode($consultar['imagen']) . '">'; ?>
    <div class="card-body">
      <h5 class="card-title"><?php echo $consultar['nombre']; ?></h5>
      <p class="card-text"><?php echo $consultar['descripcion']; ?></p>
      <h5 class="card-price"><?php echo $consultar['precio']; ?></h5>
    <a href="datos.php?id=<?php echo $consultar ['id']; ?>" class="card-button">Comprar</a>
    </div>
  </div>
  <?php } ?>
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
                     <li><a href="../php/empleado.php">Inicio</a></li>
                    <li><a href="../php/productos3.php">Productos</a></li>
                    <li><a href="../php/pedidos2.php">Pedidos</a></li>    
                    <li><a href="../php/forms.php">Registro</a></li>
                    <li><a href="../php/perfil-empl.php">Mi Perfil</a></li>
                    
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
  

</body>
</html>