<?php
session_start();
include "conexion.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_pedido'])) {
  $id_pedido = $_POST['id_pedido'];
  mysqli_query($conn, "UPDATE pedidos SET estado='entregado' WHERE id_pedido='$id_pedido'");
  exit; 
}


if (isset($_GET['tabla'])) {
  $query = mysqli_query($conn, "SELECT * FROM pedidos ORDER BY fecha DESC");

  if (!$query) {
    echo "<p>Error en la consulta: " . mysqli_error($conn) . "</p>";
    exit;
  }

  if (mysqli_num_rows($query) == 0) {
    echo "<p>No hay pedidos registrados.</p>";
  } else {
    echo "<table border='1' cellpadding='8' cellspacing='0'>
            <tr>
              <th>Cliente</th>
              <th>Productos</th>
              <th>Total</th>
              <th>Dirección</th>
              <th>Pago</th>
              <th>Número de Cuenta</th>
              <th>Estado</th>
              <th>Fecha</th>
              <th>Acción</th>
            </tr>";
    while ($pedido = mysqli_fetch_assoc($query)) {
      echo "<tr>
              <td>" . htmlspecialchars($pedido['nombre_cliente']) . "</td>
              <td>" . htmlspecialchars($pedido['productos']) . "</td>
              <td>$" . number_format($pedido['total'], 0, ',', '.') . "</td>
              <td>" . htmlspecialchars($pedido['direccion']) . "</td>
              <td>" . $pedido['pago'] . "</td>
              <td>" . $pedido['numero_cuenta'] . "</td>
              <td>" . $pedido['estado'] . "</td>
              <td>" . $pedido['fecha'] . "</td>
              <td>";
      if ($pedido['estado'] == 'pendiente') {
        echo "<form method='POST' onsubmit='return marcarEntregado(this);'>
                <input type='hidden' name='id_pedido' value='" . $pedido['id_pedido'] . "'>
                <button type='submit'>Entregado</button>
              </form>";
      } else {
        echo "✅ Entregado";
      }
      echo "</td></tr>";
    }
    echo "</table>";
  }
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Pedidos</title>
  <link rel="stylesheet" href="../style/style.css">
  <script>
    function cargarTabla() {
      fetch('pedidos.php?tabla=1')
        .then(response => response.text())
        .then(html => {
          document.getElementById('tabla-pedidos').innerHTML = html;
        });
    }

    function marcarEntregado(formulario) {
      const datos = new FormData(formulario);
      fetch('pedidos.php', {
        method: 'POST',
        body: datos
      }).then(() => {
        cargarTabla(); 
      });
      return false; 
    }

    window.onload = cargarTabla;
    setInterval(cargarTabla, 1000);
  </script>
</head>
<body class="index" >
  
    
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


  <h2>📋 Panel de Pedidos</h2>
  <div id="tabla-pedidos">
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
</body>
</html>
