<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Perfil</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerLogged.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <div class="container">
        <?php if(isset($message)){ ?>
          <?php if($message != ""){ ?>
            <div class="alert alert-success">
              <strong><?php echo $message; ?></strong>
            </div>
          <?php } ?>
        <?php } ?>
        <?php foreach ($users as $user) { ?>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <h2 class="text-profile"><?php echo $user->getId(); ?></h2>
            <br><br>
            <a class="btn btn-info btn-profile col-sm-7 col-md-5 col-lg-4" href="<?php echo $helper->url('user','receivedMessages') ?>&id=<?php echo $user->getId(); ?>" role="button">Bandeja de entrada</a>
            <br><br>
            <a class="btn btn-info btn-profile col-sm-7 col-md-5 col-lg-4" href="<?php echo $helper->url('user','sentMessages') ?>&id=<?php echo $user->getId(); ?>" role="button">Enviados</a>
            <br><br>
            <a class="btn btn-info btn-profile col-sm-7 col-md-5 col-lg-4" href="<?php echo $helper->url('view','messageForm') ?>&id=<?php echo $user->getId(); ?>" role="button">Redactar Mensaje</a>
          </div>
          <br><br><br>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <img class="img-profile" src="public/img/resources/profile.png" class="img-responsive">
          </div>
        <?php } ?>
      </div><!-- Inner container -->
    </div><!-- Jumbotron -->
  </div><!-- Outer container -->
    <!-- Footer -->
    <?php require_once('layout/footerLogged.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
