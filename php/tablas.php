<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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


  <h2>Tabla de contacto</h2>

<?php
include 'conexion.php';

$sql = "SELECT * FROM contacto";
$resultado = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nombre</th><th>Teléfono</th><th>Correo</th><th>Sugerencia</th><th>Acciones</th></tr>";


if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
          echo "<td>" . $fila['sugerencia'] . "</td>";
            echo "<td>
                    <a href='../php/editar-contact.php?id=" . $fila['id'] . "' class='btn btn-edit'>Editar</a>
                    <a href='../php/eliminar-contact.php?id=" . $fila['id'] . "' class='btn btn-delete' onclick=\"return confirm('¿Estás seguro de eliminar este contacto?');\">Eliminar</a>
                  </td>";
            echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay datos</td></tr>";
}

echo "</table>";

$conn->close();
?>




  <h2>Tabla de Registros</h2>

<?php
include 'conexion.php';

$sql = "SELECT * FROM registro";
$resultado = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nombre</th><th>Email</th><th>Método de pago</th><th>Pass</th><th>Rol</th><th>Acciones</th></tr>";


if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['pago'] . "</td>";
        echo "<td>" . $fila['pass'] . "</td>";
          echo "<td>" . $fila['rol'] . "</td>";
            echo "<td>
                    <a href='../php/editar-registro.php?id=" . $fila['id'] . "' class='btn btn-edit'>Editar</a>
                    <a href='../php/eliminar-registro.php?id=" . $fila['id'] . "' class='btn btn-delete' onclick=\"return confirm('¿Estás seguro de eliminar este usuario?');\">Eliminar</a>
                  </td>";
            echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay datos</td></tr>";
}

echo "</table>";

$conn->close();
?>

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