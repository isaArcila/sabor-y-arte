<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Nosotros</title>
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


<div class="box4">

    <h2 class="about-us">Nosotros</h2>

    <p style="position:relative; left:90px;" class="p2">En Sabor y Arte combinamos la pasión por la repostería con el amor por los detalles. Somos una cafetería artesanal donde cada postre, bebida y platillo es preparado con ingredientes frescos, dedicación y un toque creativo que transforma lo cotidiano en una experiencia única. Nuestro espacio está pensado para que te sientas como en casa, rodeado de sabores que despiertan recuerdos y momentos especiales. Ven y descubre cómo el sabor se convierte en arte.</p>


</div>

<div class="main">
  <div class="slider">
    <div class="track">
      <figure class="slide-1"><img src="../img/logo.png" alt="imagen1"></figure>
      <figure class="slide-2"><img src="../img/pan tocineta.jpg" alt="1magen2"></figure>
      <figure class="slide-3"><img src="../img/milo_cal.jpg" alt="Imagen3"></figure>
      <figure class="slide-4"><img src="../img/galleta_cora.jpg" alt="Imagen4"></figure>
      <figure class="slide-5"><img src="../img/pan.jpg" alt="Imagen5"></figure>
      <figure class="slide-6"><img src="../img/soda_mango.jpg" alt="Imagen6"></figure>
        </div>
  </div>

<br><br><br><br><br><br>
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

</body>
</html>