<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir producto</title>
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


 
  <section class="subir">
    <form method="POST" action="../php/insert_pro.php" class="formu" enctype="multipart/form-data">
      <h2 class="subir">Subir Productos</h2>
      <input type="hidden" name="tipo" value="fregadero">

      <div class="admin">
        <input type="text" name="nombre" placeholder="Nombre" required>
      </div>

      <div class="admin">
        <input type="text" name="descripcion" placeholder="Descripción" required>
      </div>

      <div class="admin">
        <input type="text" name="precio" placeholder="Precio" required>
      </div>

      <div class="admin">
        <input type="file" name="imagen" required>
      </div>

      <div class="admin">
        <select name="categoria" class="categoria" required>
          <option value="">Seleccionar categoría</option>
          <option value="porciones">Porciones de torta</option>
          <option value="sal">Salados</option>
          <option value="dulces">Dulces</option>
          <option value="frio">Frío</option>
          <option value="caliente">Caliente</option>
          <option value="pan">Pan</option>
        </select>
      </div>

      <button type="submit" class="btn-guardar">Guardar</button>
    </form>
  </section>

  
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
