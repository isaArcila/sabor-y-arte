<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compras</title>
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
    


<?php
session_start();
include "conexion.php";

$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM pedidos WHERE id_usuario='$id' ORDER BY fecha DESC");
?>

<h2>Historial de Pedidos</h2>
<table border="1">
<tr><th>Fecha</th><th>Productos</th><th>Total</th></tr>
<?php while ($p = mysqli_fetch_assoc($sql)): ?>
<tr>
  <td><?= $p['fecha'] ?></td>
  <td><?= $p['productos'] ?></td>
  <td>$<?= number_format($p['total'], 0, ',', '.') ?></td>
</tr>
<?php endwhile; ?>
</table>



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
                    <li><a href="../php/forms.php">Registro</a></li>
                     <li class=""><a href="../php/carrito.php">Carrito</a></li>
                     <li> <a href="../php/perfil-cli.php">Mi Perfil</a></li>
                    
                </ul>
    </div>

  </div>
</footer>
  
</body>
</html>
