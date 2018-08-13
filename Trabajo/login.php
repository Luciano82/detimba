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
    <title>DeTimba.com - Login</title>
  </head>
  <body>

    <section>
    <header>
      <?php include './header.php'; ?>
    </header>
  </section>

    <div class="contenedor-form">
      <div class="toggle">
        <span><a href="registro.php">REGISTRATE!</a> </span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form method="post">
              <div class="form-group">
                  <input class="form-control" placeholder="Correo Electronico" type="text" name="email" value="<?=$email?>">
                  <?php if (isset($errores['email'])): ?>
        				  <span style="color: red;"><?=$errores['email'];?></span>
        			    <?php endif; ?>
              </div>


              <div class="form-group">
                  <input class="form-control" placeholder="Contraseña" type="password" name="pass" value="">
                  <?php if (isset($errores['pass'])): ?>
                  <span style="color: red;"><?=$errores['pass'];?></span>
                  <?php endif; ?>
              </div>


                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>


        <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
    </div>

    <section>
  <footer>
    <?php include './footer.php'; ?>
  </footer>
    </section>

  </body>
</html>
