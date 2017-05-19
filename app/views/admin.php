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
        <div class="container">
          <?php if(isset($message)){ ?>
              <div class="alert alert-success">
                <strong><?php echo $message ?></strong>
              </div>
          <?php } ?>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <h2 class="text-profile">Página de administrador</h2>
            <br><br>
            <a class="btn btn-info btn-profile col-sm-7 col-md-5 col-lg-4" href="<?php echo $helper->url('group','table') ?>" role="button">Ver grupos</a>
            <br><br>
            <a class="btn btn-info btn-profile col-sm-7 col-md-5 col-lg-4" href="<?php echo $helper->url('view','groupForm') ?>" role="button">Dar de alta grupo</a>
          </div>
          <br><br><br>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <img class="img-profile" src="public/img/resources/amplifier.png" class="img-responsive">
          </div>
        </div><!-- Inner container -->
      </div><!-- Jumbotron -->
    </div><!-- Outer container -->
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
