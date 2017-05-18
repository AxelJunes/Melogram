<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/message.css">
    <title>Redactar Mensaje</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerMessages.php'); ?>
    <div class="container">
      <!-- Content -->
      <div class="jumbotron">
        <form action="<?php echo $helper->url('user','sendMessage');?>&id=<?php echo $logged; ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon">Para</span>
            <div class="form-group">
             <select class="form-control" name="receiver" required>
               <option>Todos</option>
               <!-- Show only groups which the user is a member of -->
               <?php foreach ($groups as $group) { ?>
                     <option><?php print_r($group["chat_group"]);?> (Grupo)</option>
               <?php } ?>
               <!-- Show users registered in database -->
               <?php foreach ($users as $user) { ?>
                     <option><?php echo $user->getId(); ?></option>
               <?php } ?>
             </select>
           </div>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">Asunto</span>
            <input type="text" class="form-control" name="subject" required>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">Mensaje</span>
            <textarea class="form-control message-text" name="message" required></textarea>
          </div>
          <br>
              <a class="btn btn-danger col-lg-2" href="<?php echo $helper->url('user','profile') ?>&id=<?php echo $logged; ?>" role="button">Volver</a>
          <button type="submit" class="btn btn-info col-md-offset-9 col-lg-offset-8 col-lg-2" name="submit">Enviar</button>
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
