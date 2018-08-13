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
    <title>DeTimba.com - Registrate</title>
  </head>
  <body>

    <section>
    <header>
      <?php include './header.php'; ?>
    </header>
  </section>

    <div class="contenedor-form">
      <div class="toggle">
        <span><a href="login.php">ESTOY REGISTRADO</a></span>
        </div>


        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="#" method="post">
              <div class="form-group">
                  <input type="text" placeholder="Usuario" class="form-control" name="name" value="<?=$name?>">
                  <?php if (isset($errores['name'])): ?>
                  <span style="color: red;"><?=$errores['name'];?></span>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <input class="form-control" placeholder="Contraseña" type="password" name="pass" value="">
                  <?php if (isset($errores['pass'])): ?>
                  <span style="color: red;"><?=$errores['pass'];?></span>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <input class="form-control" placeholder="Repetir Contraseña" type="password" name="rpass" value="">
                  <?php if (isset($errores['pass'])): ?>
                  <span style="color: red;"><?=$errores['pass'];?></span>
                  <?php endif; ?>
              </div>

              <div class="form-group">
                  <input class="form-control" placeholder="Correo Electronico" type="text" name="email" value="<?=$email?>">
                  <?php if (isset($errores['email'])): ?>
                  <span style="color: red;"><?=$errores['email'];?></span>
                  <?php endif; ?>
              </div>
              <input type="submit" value="Registrarse">
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
