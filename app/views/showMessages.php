<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Detalles del mensaje</title>
</head>
<body>
    <!-- Header -->
    <?php require_once('layout/headerMessageInfo.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
          <?php foreach ($messages as $message) { ?>
              <h2>Fecha:</h2>
              <p><?php echo $message->getMdate(); ?></p>
              <h2>Destinatario:</h2>
              <p><?php echo $message->getReceiver(); ?></p>
              <h2>Asunto:</h2>
              <p><?php echo $message->getSubject(); ?></p>
              <h2>Mensaje:</h2>
              <p><?php echo $message->getMtext(); ?></p>
          <?php } ?>
          <br>
          <?php if($_GET['messages'] == 'received'){ ?>
            <a class="btn btn-danger col-lg-2" href="<?php echo $helper->url('user','receivedMessages') ?>&id=<?php echo $_GET['user']; ?>" role="button">Volver</a>
          <?php }else{ ?>
            <a class="btn btn-danger col-lg-2" href="<?php echo $helper->url('user','sentMessages') ?>&id=<?php echo $_GET['user']; ?>" role="button">Volver</a>
          <?php } ?>
          <br>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footerLogged.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
    <?php require_once('layout/scripts.php'); ?>
</body>
</html>
