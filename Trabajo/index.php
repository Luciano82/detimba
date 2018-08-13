<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <script type="js/script.js"></script>
    <title>DeTimba.com</title>
  </head>
  <body>
    <section>
    <header>
      <?php include './header.php'; ?>
    </header>
  </section>
    <div class="contenedor">
      <?php include './carrusel.php'; ?>

      <section class="juegos">
        <h2>Vamos a Jugar!</h2>
        <div class="contenedor-juegos">
          <article class="juego">
            <a href="loto.php"><img src="images/logoLoto.png" alt="logo loto"></a>
            <div class="descripcion">
              <a href="loto.php"><h3>Loto</h3></a>
              <br>
              <p>Pozo: $100.000.000</p>
              <br>
              <p>Proxima Jugada: 20/08/2018</p>
              <br><br>
              <a href="loto.php" class="boton"> Jugar!</a>
            </div>
          </article>
          <article class="juego">
            <a href="#"><img src="images/logoQuini.png" alt="logo quini 6"></a>
            <div class="descripcion">
              <a href="#"><h3>Quini 6</h3></a>
              <br>
              <p>Pozo: $100.000.000</p>
              <br>
              <p>Proxima Jugada: 20/08/2018</p>
              <br><br>
              <a href="#" class="boton"> Jugar!</a>
            </div>
          </article>
          <article class="juego">
            <a href="#"><img src="images/logoToto.png" alt="logo toto bingo"></a>
            <div class="descripcion">
              <a href="#"><h3>Toto Bingo</h3></a>
              <br>
              <p>Pozo: $100.000.000</p>
              <br>
              <p>Proxima Jugada: 20/08/2018</p>
              <br><br>
              <a href="#" class="boton"> Jugar!</a>
            </div>
          </article>
          <article class="juego">
            <a href="#"><img src="images/logoTelekino.png" alt="logo telekino"></a>
            <div class="descripcion">
              <a href="#"><h3>Telekino</h3></a>
              <br>
              <p>Pozo: $100.000.000</p>
              <br>
              <p>Proxima Jugada: 20/08/2018</p>
              <br><br>
              <a href="#" class="boton"> Jugar!</a>
            </div>
          </article>
          <article class="juego">
            <a href="#"><img src="images/logoProde.png" alt="logo prode"></a>
            <div class="descripcion">
              <a href="#"><h3>Prode</h3></a>
              <br>
              <p>Pozo: $100.000.000</p>
              <br>
              <p>Proxima Jugada: 20/08/2018</p>
              <br><br>
              <a href="#" class="boton"> Jugar!</a>
            </div>
          </article>
        </div>
      </section>
    </div>
      <section>
    <footer>
      <?php include './footer.php'; ?>
    </footer>
      </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/headroom.min.js"></script>
    <script src="js/menu.js"></script>
  </body>
</html>
