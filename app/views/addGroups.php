<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login</title>
</head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerAdmin.php'); ?>
    <div class="container">
      <!-- Content -->
      <div class="jumbotron">
        <form action="<?php echo $helper->url('group','add'); ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="id" placeholder="Nombre del grupo" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-music"></span></span>
            <div class="form-group">
             <select class="form-control" name="music" required>
               <option disabled selected>Género musical</option>
               <!-- Show genres registered in database -->
               <?php foreach ($genres as $genre) { ?>
                     <option value="<?php echo $genre->getId(); ?>"><?php echo $genre->getId(); ?></option>
               <?php } ?>
             </select>
           </div>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" name="minAge" placeholder="Edad mínima" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" name="maxAge" placeholder="Edad máxima" required="required">
          </div>
          <br><br>
          <a class="btn btn-danger col-lg-2" href="<?php echo $helper->url('view','admin') ?>" role="button">Volver</a>
          <button type="submit" class="btn btn-info col-lg-offset-8 col-lg-2" name="submit">Dar de alta</button>
        </form>
        <br>
      </div><!-- Jumbotron -->
    </div><!-- Container -->
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
