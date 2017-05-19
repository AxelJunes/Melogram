<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <link rel="stylesheet" href="public/css/message.css">
      <title>Contacto</title>
  </head>

  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <div class="container">
            <form action="<?php echo $helper->url('view','home');?>&contact=yes" method="POST">
              <h3>Formulario de contacto</h3>
              <br>
              <div class="input-group contact-field">
                <span class="input-group-addon form-addon">Nombre</span>
                <input type="text" class="form-control" name="name" required>
              </div>
              <br>
              <div class="input-group contact-field">
                <span class="input-group-addon form-addon">E-mail</span>
                <input type="email" class="form-control" name="email" required>
              </div>
              <br>
              <div class="input-group contact-field">
                <span class="input-group-addon form-addon">Asunto</span>
                <input type="text" class="form-control" name="subject" required>
              </div>
              <br>
              <div class="input-group contact-field">
                <span class="input-group-addon form-addon">Mensaje</span>
                <textarea class="form-control message-text" name="message" required></textarea>
              </div>
              <br>
              <button type="submit" class="btn btn-info col-md-offset-9 col-lg-offset-10 col-lg-2" name="submit">Enviar</button>
            </form>
            <br>

        </div>
        </div><!-- Jumbotron -->
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
