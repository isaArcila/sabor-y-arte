<?php
session_start();
include "conexion.php";

$id_usuario = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM carrito WHERE id_usuario='$id_usuario'");
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito de Compras</title>
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


  <h2>Carrito de Compras</h2>

  <?php if (mysqli_num_rows($query) == 0): ?>
    <p class="empty-cart">Tu carrito está vacío. Ve a <a href="../php/productos4.php">productos</a> para agregar productos.</p>
  <?php else: ?>
    <div class="carrito-contenedor">
      <h3 style="text-align: center; font-size:20px; margin-top:20px; color: #333; margin-bottom: 20px; text-shadow: 0 4px 8px rgba(0, 0, 0, .5);">Productos en tu carrito</h3>
      <div class="lista-productos">
        <?php while ($row = mysqli_fetch_assoc($query)):
          $precio = isset($row['precio']) ? intval(preg_replace('/[^0-9]/', '', $row['precio'])) : 0;
          $cantidad = isset($row['cantidad']) ? intval($row['cantidad']) : 1;
          $subtotal = $precio * $cantidad;
          $total += $subtotal;
        ?>
          <form method="POST" action="modificar_cantidad.php" class="producto-fila">
            <div class="producto-info">
              <strong><?php echo htmlspecialchars($row['nombre']); ?></strong><br>
              Subtotal: $<?php echo number_format($subtotal, 0, ',', '.'); ?>

            </div>
            <div class="producto-actions">
              <input type="number" name="cantidad" value="<?php echo $cantidad; ?>" min="1" required>
              <input type="hidden" name="id_carrito" value="<?php echo $row['id_carrito']; ?>">
              <button type="submit">Actualizar</button>
              <a href="eliminar_carrito.php?id=<?php echo $row['id_carrito']; ?>">Eliminar</a>
            </div>
          </form>
        <?php endwhile; ?>
      </div>
<h3 style="color: #333;">Total: $<?php echo number_format($total, 0, ',', '.'); ?></h3>
    </div>

    <form class="form-carrito" method="POST" action="procesar_pedido.php"> 
      <h4 style="text-align: center; font-size:20px; margin-top:20px; color: #333; margin-bottom: 20px; text-shadow: 0 4px 8px rgba(0, 0, 0, .5);">Datos para la entrega</h4>
      <input style="position: relative; left:60px; width:500px; background-color:#fff; border:1px solid #8e3f20;" type="text" name="nombre_cliente" placeholder="Nombre completo" required>
      <input style="position: relative; left:60px; width:500px; background-color:#fff; border:1px solid #8e3f20;" type="text" id="direccion" name="direccion" placeholder="Dirección" required>

      <select style="position: relative; left:80px; width:500px; background-color:#fff; border:1px solid #8e3f20;" name="municipio" required>
        <option value="" selected>Seleccionar municipio</option>
        <option value="Sonsón">Sonsón</option>
      </select>

      <input style="position: relative; left:60px; width:500px; background-color:#fff; border:1px solid #8e3f20;" type="text" name="telefono" placeholder="Teléfono" required>

     <select id="metodo-pago" name="pago" required style="position: relative; left:80px; width:500px; background-color:#fff; border:1px solid #8e3f20;">
  <option value="" selected>Seleccionar método de pago</option>
  <option value="Bancolombia">Bancolombia</option>
  <option value="Nequi">Nequi</option>
  <option value="Paypal">Paypal</option>
  <option value="Pse">PSE</option>
  <option value="Efectivo">Pago en efectivo</option>
</select>

<div id="tarjeta-container" style="display: none; margin-top: 10px; position: relative; left:80px;">
  <label style="font-size:14px; position:relative; top:-8px;" for="numero_cuenta">Número de cuenta:</label><br>
  <input style="position: relative; left:60px; width:500px; background-color:#fff; border:1px solid #8e3f20; postion:relative; left:-20px  ;" type="text" id="numero-cuenta" name="numero_cuenta" placeholder="Número de cuenta" style="width:500px; background-color:#fff; border:1px solid #8e3f20;">
</div>

      <select style="position: relative; left:80px; width:500px; background-color:#fff; border:1px solid #8e3f20;" name="reclamar" required>
        <option value="" selected>Seleccionar entrega</option>
        <option value="domicilio">Domicilio</option>
        <option value="punto de venta">Punto de venta</option>
      </select>

      <button style="width:400px; position:relative; left:120px;" type="submit">Procesar pedido</button>
    </form>
    <br><br><br><br><br>
  <?php endif; ?>

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

<script>

  const metodoPago = document.getElementById('metodo-pago');
  const tarjetaContainer = document.getElementById('tarjeta-container');
  const inputTarjeta = document.getElementById('numero-tarjeta');

  metodoPago.addEventListener('change', function () {
    if (this.value === 'Efectivo') {
      tarjetaContainer.style.display = 'none';
      inputTarjeta.value = '';
    } else {
      tarjetaContainer.style.display = 'block';
    }
  });

 
</script>

  
</body>
</html>
