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
        <form action="<?php echo $helper->url('user','sendMessage'); ?>" method="POST">
          <div class="input-group">
            <span class="input-group-addon">Para</span>
            <div class="form-group">
             <select class="form-control" name="receiver" required>
               <option class="alert alert-info">Todos</option>
               <option class="alert alert-info" disabled>Grupos</option>
               <!-- Show groups registered in database -->
               <?php foreach ($groups as $group) { ?>
                     <option><?php print_r($group["chat_group"]); ?></option>
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
            <input type="text" class="form-control" name="Asunto" required>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon">Mensaje</span>
            <textarea class="form-control message-text" name="Mensaje" required></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-lg" name="submit">Enviar</button>
        </form>
      </div><!-- Jumbotron -->
    </div><!-- Container -->
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
