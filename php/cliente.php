<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="index">

        <a href="../app/cliente.html" class="logo-link">
             <img src="../img/logo.png" alt="Sabor y Arte" class="logoo">
                </a>

                               
    <header class="header">
        

        <img class="corner" src="../img/corner.png" alt="">

        <div class="menu container">
           <nav class="navbar4">
      <ul>
                     <li class="li2"><a href="../php/cliente.php">Inicio</a></li>
                    <li class="li2"><a href="../php/productos4.php">Productos</a></li>
                    <li class="li2"><a href="../php/nosotros.php">Nosotros</a></li>    
                    <li><a href="../php/contacto.php">Contacto</a></li>
                    <li><a href="../php/forms.php">Registro</a></li>
                     <li class=""><a href="../php/carrito.php">Carrito</a></li>
                     <li class="menu-perfil">
                        <a href="../php/perfil-cli.php">Mi Perfil</a>
                     </li>
                </ul>
            </nav>
     
        </div>
        <div class="header-content">
            <div class="header-info">
                <div class="header-txt">
                    <h1>Panadería & Repostería Fina</h1>
                    <p>En Sabor & Arte horneamos cada día con pasión, mezclando tradición y creatividad. Disfruta pan artesanal y repostería fina donde cada bocado es una experiencia.</p>
                    <a href="../php/productos4.php"class="btn-1">Ver más</a>
                </div>
                <div class="header-img">
                    <img src="../img/capuchino.webp" alt="">
                </div>
            </div>
        </div>
    </header>

    <section class="info container">

        <div class="info-1">
            <img src="../img/horario.png" alt="">
            <h2>Horario</h2>
            <p>Lunes a viernes 7am a 8pm</p>
        </div>

           <div class="info-2">
           <a href="../php/mapa.php"><img src="../img/ubicacion.png" alt="">
            <h2>Ubicación</h2>
            <p>Sonsón - Ant</p>
        </div>
        </a>

          <div class="info-1">
            <img src="../img/telefono.png" alt="">
            <h2>Telefóno</h2>
            <p>311 472 8603</p>
        </div>
    </section>

     <section class="nosotros">

    <img class="corner2" src="../img/2corner.png" alt="">

        <div class="nosotros-info container">

            <div class="nosotros-img">
        <img src="../img/frappe.png" alt="">
    </div>
    <div class="nosotros-txt">
        <h2>Calidad y Distinción en Repostería</h2>
        <p>Sabor & Arte es una empresa destacada en panadería y repostería fina, reconocida por su calidad, innovación y atención al detalle. Su propuesta combina tradición y creatividad para ofrecer productos de alto nivel.
        </p>

        <a href="../php/nosotros.php" class="btn-2">Saber más</a>
    </div>

        </div>

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