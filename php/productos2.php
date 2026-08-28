<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

  <main class="container my-5">
    <section class="product-list row g-4 justify-content-center">
      
      <article class="card col-sm-6 col-md-4 shadow-sm">
         <div class="image-container">
  <img src="../img/torta red velvet.jpg" class="card-img-top4" alt="Torta">
          </div>
        <div class="card-body">
          <h5 class="card-title">Porciones de torta</h5>
          <p class="card-text1">Disfruta nuestras irresistibles porciones de torta, hechas con ingredientes frescos, suaves capas y el equilibrio perfecto de dulzura. Ideales para acompañar tu café o darte un gusto especial.</p>
          <a href="../php/porciones-admin.php" class="btn btn-primary w-100">Ver más</a>
        </div>
      </article>

          <article class="card col-sm-6 col-md-4 shadow-sm">
            <div class="image-container">
        <img src="../img/palito de queso.jpg" class="card-img-top2" alt="sal"/>
        </div>
        <div class="card-body">
          <h5 class="card-title">Productos de sal</h5>
          <p class="card-text1">Disfruta nuestros productos de sal: frescos, artesanales y perfectos para tus comidas. Ideales para compartir, llenos de sabor y con ingredientes de calidad que conquistan cualquier paladar.</p>
          <a href="../php/sal-admin.php" class="btn btn-primary3   w-100">Ver más</a>
        </div>
      </article>

          <article class="card col-sm-6 col-md-4 shadow-sm">
            <div class="image-container">
        <img src="../img/galleta_cora.jpg" class="card-img-top" alt="dulce"/>
        </div>
        <div class="card-body">
          <h5 class="card-title">Productos Dulces</h5>
          <p class="card-text1">Disfruta nuestros productos dulces: frescos, artesanales y perfectos para compartir. Hechos con ingredientes de calidad que encantan tu paladar y acompañan tus mejores momentos.</p>
          <a href="../php/dulces-admin.php" class="btn btn-primary3   w-100">Ver más</a>
        </div>
      </article>

         <article class="card col-sm-6 col-md-4 shadow-sm">
            <div class="image-container">
        <img src="../img/soda_piña.jpg" class="card-img-top4" alt="frio"/>
        </div>
        <div class="card-body">
          <h5 class="card-title">Bebidas frías</h5>
          <p class="card-text1">Disfruta nuestras bebidas frías: refrescantes, artesanales y perfectas para compartir. Hechas con ingredientes de calidad que deleitan tu paladar y acompañan tus mejores momentos.</p>
          <a href="../php/frio-admin.php" class="btn btn-primary3   w-100">Ver más</a>
        </div>
      </article>

     <article class="card col-sm-6 col-md-4 shadow-sm">
            <div class="image-container">
        <img src="../img/cafe.jpg" class="card-img-top4" alt="caliente"/>
        </div>
        <div class="card-body">
          <h5 class="card-title">Bebidas calientes</h5>
          <p class="card-text1">Disfruta nuestras bebidas calientes: reconfortantes, artesanales y perfectas para cualquier momento. Hechas con ingredientes de calidad que consienten tu paladar y acompañan tus mejores instantes.</p>
          <a href="../php/caliente-admin.php" class="btn btn-primary3   w-100" style="position:relative; top:13px;">Ver más</a>
        </div>
      </article>

        <article class="card col-sm-6 col-md-4 shadow-sm">
            <div class="image-container">
        <img src="../img/pan.jpg" class="card-img-top3" alt="pan"/>
        </div>
        <div class="card-body">
          <h5 class="card-title">Panes</h5>
          <p class="card-text1">Disfruta nuestros panes: frescos, artesanales y perfectos para compartir. Hechos con ingredientes de calidad que llenan de sabor cada bocado y acompañan tus momentos con calidez.</p>
          <a href="../php/panes-admin.php" class="btn btn-primary3   w-100">Ver más</a>
        </div>
      </article>

    </section>
  </main>


<footer class="footer">
      <div class="footer-container">

        <div class="link">
          <h3>Sabor y Arte</h3>
          <div class="socials">
            <a href="https://www.instagram.com/saborartesonson/" target="_blank">
              <img src="../img/instagram.png" alt="Instagram" class="icon" />
            </a>
            <a href="https://www.facebook.com/sabor.arce/" target="_blank">
              <img src="../img/facebook2.png" alt="Facebook" class="icon" />
            </a>
            <a href="https://wa.me/573114728603">
              <img src="../img/whatsapp.png" alt="WhatsApp" class="icon" />
            </a>
          </div>
        </div>

        <div class="link">
          <h3>Menú</h3>
          <ul>
            <li><a href="../php/admin.php">Inicio</a></li>
            <li><a href="../php/productos4.php">Productos</a></li>
            <li><a href="../php/start-invent.php">Inventario</a></li>
            <li><a href="../php/pedidos.php">Pedidos</a></li>
            <li style="position: relative; top: -108px; left: 120px;"><a href="../php/form.php">Subir</a></li>
            <li style="position: relative; top: -108px; left: 120px;"><a href="../php/tablas.php">Tablas</a></li>
            <li style="position: relative; top: -108px; left: 120px;"><a href="../php/forms.php">Registro</a></li>
            <li style="position: relative; top: -108px; left: 120px;"><a href="../php/perfil.php">Perfil</a></li>
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
        <p style="position: relative; left: 450px; top: 15px;">
          &copy; <span id="year"></span> Sabor y Arte. Todos los derechos reservados.
        </p>
      </div>

      <script>
        document.getElementById("year").textContent = new Date().getFullYear();
      </script>
    </footer>

  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>





