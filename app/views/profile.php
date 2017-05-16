<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Profile</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerLogged.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <?php foreach ($users as $user) { ?>
          <h2>Perfil de: <?php echo $user->getId(); ?></h2>
          <p class="text">Edad: <?php echo $user->getAge(); ?></p>
          <p class="text">Música preferida: <?php echo $user->getMusic(); ?></p>
          <br>
          <div class="btn-group">
            <a class="btn btn-primary" href="<?php echo $helper->url('user','receivedMessages') ?>&id=<?php echo $user->getId(); ?>" role="button">Bandeja de entrada</a>
            <a class="btn btn-primary" href="<?php echo $helper->url('user','sentMessages') ?>&id=<?php echo $user->getId(); ?>" role="button">Enviados</a>
            <a class="btn btn-primary" href="<?php echo $helper->url('view','messageForm') ?>&id=<?php echo $user->getId(); ?>" role="button">Redactar Mensaje</a>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
