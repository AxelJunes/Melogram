<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Página de administrador</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerAdmin.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <a class="btn btn-primary" href="<?php echo $helper->url('group','table') ?>" role="button">Ver grupos</a>
        <br><br>
        <a class="btn btn-primary" href="<?php echo $helper->url('view','groupForm') ?>" role="button">Dar de alta grupo</a>
      </div><!-- Jumbotron -->
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
