<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <title>Home</title>
  </head>
  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <?php if($info != ""){ ?>
            <div class='alert alert-success alert-dismissable' data-dismiss='alert'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong><?php echo $info; ?></strong>
            </div>
          <?php } ?>
          <h2 class="text-home">Bienvenido a melogram, la red social para "melómanos"!</h2>
          <br><br>
          <div class="row">
            <div class="col-lg-4">
              <a href="<?php echo $helper->url('genre','index'); ?>"><img src="public/img/resources/info1.png" class="img-responsive img-info"></a>
              <br>
              <p class="text-home">
                Conoce a otros amantes de la música, y comparte tus gustos con ellos.
              </p>
              <br>
            </div>
            <div class="col-lg-4">
              <a href="<?php echo $helper->url('view','login'); ?>"><img src="public/img/resources/info2.png" class="img-responsive img-info"></a>
              <br>
              <p class="text-home">
                Envia mensajes a otros usuarios, aunque tengan gustos musicales distintos.
              </p>
              <br>
            </div>
            <div class="col-lg-4">
              <a href="<?php echo $helper->url('group','index'); ?>"><img src="public/img/resources/info3.png" class="img-responsive img-info"></a>
              <br>
              <p class="text-home">
                Comunícate con gente que esté en los mismos grupos que tú.
              </p>
              <br>
            </div>
          </div><!-- Row -->
        </div><!-- Jumbotron -->
    </div>
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
