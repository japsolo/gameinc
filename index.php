<?php

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME INC &#8482</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Raleway:400,700|Roboto+Condensed:400,700|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="pics/favicon.ico"/>
  </head>
  <body>
    <header>
      <?php
        require_once("components/header.php");
        ?>
    </header>
    <main class="main">
      <section class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/venta-RDR2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/ps4-edl.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/odissey-venta.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <section class="links-section">
        <div class="payments">
          <div class="icon">
            <i class="far fa-credit-card"></i>
          </div>
          <div class="desc">
            <p>MEDIOS DE PAGO</p>
            <a href="#">Ver promociones bancarias</a>
          </div>
        </div>
        <div class="shipping">
          <div class="icon">
            <i class="fas fa-truck"></i>
          </div>
          <div class="desc">
            <p>ENVÍOS A DOMICILIO A TODO EL PAÍS</p>
            <a href="#">Calculá el costo de envío</a>
          </div>
        </div>
        <div class="pickup">
          <div class="icon">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <div class="desc">
            <p>RETIRÁ GRATIS TU PEDIDO EN SUCURSAL</p>
            <a href="#">Ver mapa de nuestras sucursales</a>
          </div>
        </div>
      </section>
      <section class="main-categories">
        <div class="top-products">
          <div class="product-row">
            <div class="product-container">
              <div class="cover">
                <img src="pics/red2.jpg" alt="">
                <img id="newitem" src="http://www.stickpng.com/assets/thumbs/5a5a8a2214d8c4188e0b08e4.png" alt="">
              </div>
              <div class="price">
                $2399
              </div>
              <div class="buynow">
                <input type="submit" name="buynow" value="COMPRAR AHORA">
              </div>
            </div>
            <div class="product-container">
              <div class="cover">
                <img src="pics/fifa19.jpg" alt="">
              </div>
              <div class="price">
                $1999
              </div>
              <div class="buynow">
                <input type="submit" name="buynow" value="COMPRAR AHORA">
              </div>
            </div>
            <div class="product-container">
              <div class="cover">
                <img src="pics/titan.jpg" alt="">
              </div>
              <div class="price">
                $1499
              </div>
              <div class="buynow">
                <input type="submit" name="buynow" value="COMPRAR AHORA">
              </div>
            </div>
          </div>
        <div class="product-row">
          <div class="product-container">
            <div class="cover">
              <img src="pics/acreed.jpg" alt="">
            </div>
            <div class="price">
              $2399
            </div>
            <div class="buynow">
              <input type="submit" name="buynow" value="COMPRAR AHORA">
            </div>
          </div>
          <div class="product-container">
            <div class="cover">
              <img src="pics/battlefield.jpg" alt="">
            </div>
            <div class="price">
              $2199
            </div>
            <div class="buynow">
              <input type="submit" name="buynow" value="COMPRAR AHORA">
            </div>
          </div>
          <div class="product-container">
            <div class="cover">
              <img src="pics/fallout.jpg" alt="">
            </div>
            <div class="price">
              $1199
            </div>
            <div class="buynow">
              <input type="submit" name="buynow" value="COMPRAR AHORA">
            </div>
          </div>
        </div>
        </div>


        <div class="special">
          <div class="special-img">
            <img src="pics/nswitch.jpg" alt="">
          </div>
          <div class="special-img">
            <img src="pics/funko.jpg" alt="">
          </div>
          <div class="special-img">
            <img src="pics/labo.jpg" alt="">
          </div>
        </div>
        <div class="top-categories">
          <div class="category-img">
            <img src="pics/notebooks.jpg" alt="">
          </div>
          <div class="category-img">
            <img src="pics/edcolecciones.jpg" alt="">
          </div>
          <div class="category-img">
            <img src="pics/binfantiles.jpg" alt="">
          </div>
        </div>
      </section>
      <span class="background"></span>
    </main>
    <footer>
      <div class="footer-container">
        <div class="footer-column1">
          <div class="social-media">
          <label for=""> Seguinos en <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-instagram"></i></a></label>
          </div>
        </div>
        <div class="footer-column2">
          <h3> NOSOTROS </h3>
           <ul>
             <li>Quienes Somos</li>
             <li>Contacto</li>
           </ul>
        </div>
        <div class="footer-column3">
          <h3> LEGALES </h3>
           <ul>
             <li>Ayuda</li>
             <li>Politica de Privacidad</li>
             <li>Terminos y condiciones</li>
           </ul>
        </div>
        <div class="footer-column4">
          <h3> COMPRA 100% SEGURA </h3>
           <ul>
            <li>Nuestro sitio posee toda la seguridad que necesitas para realizar tu compra</li>
            <li><i class="fas fa-check-circle"></i><i class="fas fa-user-check"></i></li>
          </ul>
        </div>
      </div>
      <div class="rights">
        <div class="logo">
          <a href="#">GAME<span style="color:#FC1B1A; margin-left:2px">INC</span></a>
        </div>
        <p> ©Todos los derechos reservados. </p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>