<!DOCTYPE html>
<html lang="en" dir="ltr">
  <he    <meta charset="utf-8">
      <meta name="viewport" content="widht=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/fontello.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
      <script type="js/script.js"></script>
      <title>DeTimba.com - Loto</title>
  </head>
  <body>
    <section>
      <header>
        <?php include './header.php'; ?>
      </header>
    </section>

    <section class="jugada">
      <div class="titulojugada">
        <img src="images/logoLoto.png" alt="logo loto">
        <br>
        <!-- <h2>Loto</h2> -->
      </div>
      <div class="contenedor-jugada">
          <div class="resultado-jugada">
            <h3>Resultados del ultimo sorteo</h3>
              <img src="images/resultadoLoto.jpg" alt="resultado loto">
          </div>
        <div class="jugadanueva">
          <h3>Arma tu jugada de Loto!</h3>
          <form class="jugadanumeros" action="" method="post">
            <legend>Tus numeros de la suerte</legend>
            <br>
            <label for="numeros">Elegi 6 numeros
              <br><br>
              <input type="checkbox" name="numeros" id="chbx0">00
              <input type="checkbox" name="numeros" id="chbx1">01
              <input type="checkbox" name="numeros" id="chbx2">02
              <input type="checkbox" name="numeros" id="chbx3">03
              <input type="checkbox" name="numeros" id="chbx4">04
              <input type="checkbox" name="numeros" id="chbx5">05
              <input type="checkbox" name="numeros" id="chbx6">06
              <input type="checkbox" name="numeros" id="chbx7">07
              <input type="checkbox" name="numeros" id="chbx8">08
              <input type="checkbox" name="numeros" id="chbx9">09
              <br><br>
              <input type="checkbox" name="numeros" id="chbx10">10
              <input type="checkbox" name="numeros" id="chbx11">11
              <input type="checkbox" name="numeros" id="chbx12">12
              <input type="checkbox" name="numeros" id="chbx13">13
              <input type="checkbox" name="numeros" id="chbx14">14
              <input type="checkbox" name="numeros" id="chbx15">15
              <input type="checkbox" name="numeros" id="chbx16">16
              <input type="checkbox" name="numeros" id="chbx17">17
              <input type="checkbox" name="numeros" id="chbx18">18
              <input type="checkbox" name="numeros" id="chbx19">19
              <br><br>
              <input type="checkbox" name="numeros" id="chbx20">20
              <input type="checkbox" name="numeros" id="chbx21">21
              <input type="checkbox" name="numeros" id="chbx22">22
              <input type="checkbox" name="numeros" id="chbx23">23
              <input type="checkbox" name="numeros" id="chbx24">24
              <input type="checkbox" name="numeros" id="chbx25">25
              <input type="checkbox" name="numeros" id="chbx26">26
              <input type="checkbox" name="numeros" id="chbx27">27
              <input type="checkbox" name="numeros" id="chbx28">28
              <input type="checkbox" name="numeros" id="chbx29">29
              <br><br>
              <input type="checkbox" name="numeros" id="chbx30">30
              <input type="checkbox" name="numeros" id="chbx31">31
              <input type="checkbox" name="numeros" id="chbx32">32
              <input type="checkbox" name="numeros" id="chbx33">33
              <input type="checkbox" name="numeros" id="chbx34">34
              <input type="checkbox" name="numeros" id="chbx35">35
              <input type="checkbox" name="numeros" id="chbx36">36
              <input type="checkbox" name="numeros" id="chbx37">37
              <input type="checkbox" name="numeros" id="chbx38">38
              <input type="checkbox" name="numeros" id="chbx39">39
              <br><br>
              <input type="checkbox" name="numeros" id="chbx40">40
              <input type="checkbox" name="numeros" id="chbx41">41
              <br><br><br>
            <button type="button" name="button">Enviar</button>
          </form>
        </div>
      </div>
    </section>

    <section>
      <footer>
        <?php include './footer.php'; ?>
      </footer>
    </section>
  </body>
</html>
