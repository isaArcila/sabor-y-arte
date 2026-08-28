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

        <a href="../app/cliente.html" class="logo-link">
             <img src="../img/logo.png" alt="Sabor y Arte" class="logoo">
                </a>

                               
    <header class="header">

        <div class="menu container">
                        <input type="checkbox" id="menu">
            <label for="menu"><img src="../img/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbar7" >
      <ul style="position:relative; left:-50px;">
                     <li><a href="../php/cliente.php">Inicio</a></li>
                    <li><a href="../php/productos4.php">Productos</a></li>
                    <li><a href="../php/nosotros.php">Nosotros</a></li>    
                    <li><a href="../php/contacto.php">Contacto</a></li>
                    <li><a href="../php/forms.php">Registro</a></li>
                     <li class=""><a href="../php/carrito.php">Carrito</a></li>
                     <li class="menu-perfil">
                        <a href="../php/perfil-cli.php">Mi Perfil</a>

                    </li>
                </ul>
            </nav>
        </div>
      </div>


  <div class="card-container">
    <?php
    include "conexion.php";
    $query = mysqli_query($conn, "SELECT * FROM productos WHERE categoria='pan'");
    while ($consultar = mysqli_fetch_array($query)) {
      $nombre_producto = $consultar['nombre'];
      $inv = mysqli_query($conn, "SELECT cantidad FROM inventario WHERE nombre = '$nombre_producto'");
      $stock = mysqli_num_rows($inv) > 0 ? mysqli_fetch_assoc($inv)['cantidad'] : 0;
    ?>
    <div class="custom-card">
      <?php echo '<img class="card-img" height="250"
        src="data:image/jpg;base64,' . base64_encode($consultar['imagen']) . '">'; ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $consultar['nombre']; ?></h5>
        <p class="card-text"><?php echo $consultar['descripcion']; ?></p>
        <h5 class="card-price"><?php echo $consultar['precio']; ?> <span style="font-weight:normal;">(Disponibles: <?php echo $stock; ?>)</span></h5>

        <form method="POST" action="agregar_carrito.php" class="card-form">
          <input type="hidden" name="nombre" value="<?php echo $consultar['nombre']; ?>">
          <input type="hidden" name="precio" value="<?php echo $consultar['precio']; ?>">
          <input type="hidden" name="id" value="<?php echo $consultar['id']; ?>">

          <label style="position:relative; top:20px;" for="cantidad_<?php echo $consultar['id']; ?>">Cantidad:</label>
          <input style="position:relative; top:20px;" type="number" name="cantidad" id="cantidad_<?php echo $consultar['id']; ?>" value="1" min="1" max="<?php echo $stock; ?>" required>

          <button style="position:relative; top:20px; ; width:300px; padding:15px;" type="submit" class="card-button" <?php echo $stock == 0 ? 'disabled style="background-color:gray;"' : ''; ?>>
            <?php echo $stock == 0 ? 'Agotado' : 'Agregar al carrito'; ?>
          </button>
        </form>
      </div>
    </div>
    <?php } ?>
  </div><footer class="footer">
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
                     <li><a href="../php/cliente.php">Inicio</a></li>
                    <li><a href="../php/productos4.php">Productos</a></li>
                    <li><a href="../php/nosotros.php">Nosotros</a></li>    
                    <li><a href="../php/contacto.php">Contacto</a></li>
                    <li style="position:relative; left:100px; top:-106px;"><a href="../php/forms.php">Registro</a></li>
                     <li style="position:relative; left:100px; top:-106px;"><a href="../php/carrito.php">Carrito</a></li>
                     <li style="position:relative; left:100px; top:-106px;"><a href="../php/perfil-cli.php">Mi Perfil</a></li>
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

