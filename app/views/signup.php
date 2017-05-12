<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/signUp.css">
    <title>Sign Up</title>
</head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('layout/header.php'); ?>
      <!-- Content -->
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <form action="signUp.php" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" name="age" placeholder="Edad" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-music"></span></span>
            <input type="text" class="form-control" name="music" placeholder="Música favorita" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass1" placeholder="Contraseña" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass2" placeholder="Repite la contraseña" required="required">
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-lg entrar">Crear cuenta</button>
          <br><br>
          <div class="link">Ya tienes cuenta?<a href="<?php echo $helper->url('view','login'); ?>">Inicia Sesión!</a></div>
        </form>
      </div>
      <!-- Footer -->
      <?php require_once('layout/footer.php'); ?>
    </div>
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
