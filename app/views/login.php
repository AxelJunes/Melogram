<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/login.css">
    <title>Iniciar Sesión</title>
</head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
      <?php if(isset($message)){ ?>
          <div class='alert alert-danger alert-dismissable' data-dismiss='alert'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong><?php echo $message ?></strong>
          </div>
      <?php } ?>
      <!-- Content -->
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <form action="<?php echo $helper->url('user','login'); ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="id" placeholder="Nombre de usuario" required autofocus>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
          </div>
          <br>
          <button type="submit" class="btn btn-info btn-lg entrar" name="submit">Entrar</button>
          <br><br>
          <div class="link">Todavía no tienes cuenta?<a href="<?php echo $helper->url('view','signup'); ?>"> Regístrate!</a></div>
        </form>
      </div><!-- Jumbotron -->
    </div><!-- Container -->
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
