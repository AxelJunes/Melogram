<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/login.css">
    <title>Registro</title>
</head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
      <?php if(isset($message)){ ?>
          <div class="alert alert-danger">
            <strong><?php echo $message ?></strong>
          </div>
      <?php } ?>
      <!-- Content -->
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <form action="<?php echo $helper->url('user','signup'); ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="id" placeholder="Nombre de usuario" required autofocus>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" name="age" placeholder="Edad" required>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-music"></span></span>
            <div class="form-group">
             <select class="form-control" name="music" required>
               <option disabled selected>Música preferida</option>
               <!-- Show genres registered in database -->
               <?php foreach ($genres as $genre) { ?>
                     <option value="<?php echo $genre->getId(); ?>"><?php echo $genre->getId(); ?></option>
               <?php } ?>
             </select>
           </div>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass1" placeholder="Contraseña" required>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass2" placeholder="Repite la contraseña" required>
          </div>
          <br>
          <button type="submit" class="btn btn-info btn-lg entrar">Crear cuenta</button>
          <br><br>
          <div class="link">Ya tienes cuenta?<a href="<?php echo $helper->url('view','login'); ?>"> Inicia Sesión!</a></div>
        </form>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
