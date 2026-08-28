<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $conn->query("SELECT * FROM registro WHERE id = $id");
    $fila = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Registro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../style/style.css" />
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

  <!-- Formulario de edición -->
  <section class="formulario-contacto">
    <form class="form-contacto" action="../php/actualizar-registro.php?id=<?php echo $fila['id']; ?>" method="POST">
      <h2 class="titulo-contacto">Editar Registro</h2>

      <div class="grupo-inputs">
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre']; ?>" required />
        <input type="email" name="email" placeholder="Correo" value="<?php echo $fila['email']; ?>" required />
        <input type="text" name="pass" placeholder="Contraseña" value="<?php echo $fila['pass']; ?>" required />

        <select style="position:relative; padding:15px; width:400px;" name="rol" class="rol" required>
          <option disabled>Selecciona tu rol</option>
          <option value="administrador" <?php if ($fila['rol'] == 'administrador') echo 'selected'; ?>>Administrador</option>
          <option value="cliente" <?php if ($fila['rol'] == 'cliente') echo 'selected'; ?>>Cliente</option>
          <option value="empleado" <?php if ($fila['rol'] == 'empleado') echo 'selected'; ?>>Empleado</option>
        </select>

        <button type="submit" class="updatee">Actualizar</button>
      </div>
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
        <li><a href="../php/productos2.php">Productos</a></li>
        <li><a href="../php/start-invent.php">Inventario</a></li>
        <li><a href="../php/pedidos.php">Pedidos</a></li>
        <li style="position:relative; top:-129px; left:120px;"><a href="../php/form.php">Subir</a></li>
        <li style="position:relative; top:-129px; left:120px;"><a href="../php/tablas.php">Tablas</a></li>
        <li style="position:relative; top:-129px; left:120px;"><a href="../php/forms.php">Registro</a></li>
        <li style="position:relative; top:-129px; left:120px;"><a href="../php/perfil.php">Perfil</a></li>
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
