<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inventario</title>
  <link rel="stylesheet" href="../style/style.css">
  <script src="../javascript/inventario.js" defer></script>
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


  <section>
    <h1>Panel de Inventario</h1>
  </section>


  <section class="buscar-form">
    <div class="buscar-t">
      <div class="buscar">
        <h2 style="position:relative; bottom:6px;">Buscar producto:</h2>
      </div>
      <form class="buscar" method="GET">
        <input type="search" name="q" placeholder="Escribe el nombre">
        <button type="submit" class="busca">Buscar</button>
      </form>
    </div>

    <?php
    include '../php/conexion.php';

    if (isset($_GET['q'])) {
        $q = mysqli_real_escape_string($conn, $_GET['q']);
        $sql = "SELECT nombre, cantidad, categoria FROM inventario WHERE nombre LIKE '%$q%'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($fila = mysqli_fetch_assoc($res)) {
                echo "<div class='resultado-cate'>
                        <strong>{$fila['nombre']}</strong><br>
                        Cantidad: {$fila['cantidad']}<br>
                        Categoría: {$fila['categoria']}
                      </div>";
            }
        } else {
            echo "<p>No se encontraron resultados.</p>";
        }
    }

    mysqli_close($conn);
    ?>
  </section>

 
  <main>
    <table class="tabla-inventario">
      <thead>
        <tr>
          <th class="encabezado">Nombre</th>
          <th class="encabezado">Categoría</th>
          <th class="encabezado">Cantidad</th>
          <th class="encabezado">Restaurar</th>
          <th class="encabezado">Editar</th>
          <th class="encabezado">Eliminar</th>
        </tr>
      </thead>
      <tbody id="tablaInventario" class="cuerpo-tabla"></tbody>
    </table>
    <div id="mensaje" style="margin-top: 20px; font-weight: bold;"></div>
  </main>


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
          <li><a href="../php/form.php">Subir</a></li>
          <li><a href="../php/tablas.php">Tablas</a></li>
          <li><a href="../php/forms.php">Registro</a></li>
          <li><a href="../php/perfil.php">Perfil</a></li>
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
          <li>Domingos: 8:00 AM – 8:00 PM</li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p style="text-align: center;">&copy; <span id="year"></span> Sabor y Arte. Todos los derechos reservados.</p>
    </div>

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
  </footer>

</body>
</html>
