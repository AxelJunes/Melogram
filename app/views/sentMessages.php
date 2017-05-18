<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Enviados</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerLogged.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Para</th>
              <th>Fecha</th>
              <th>Asunto</th>
              <th>Mensaje</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($messages as $message) { ?>
            <tr class='clickable-row' data-href="<?php echo $helper->url('message','show') ?>&id=<?php echo $message->getId(); ?>&user=<?php echo $user->getId(); ?>&messages=sent">
              <td><?php echo $message->getReceiver(); ?></td>
              <td><?php echo $message->getMdate(); ?></td>
              <td><?php echo $message->getSubject(); ?></td>
              <td><?php echo $message->getMtext(); ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        <br>
        <?php foreach ($users as $user) { ?>
          <a class="btn btn-danger col-lg-2" href="<?php echo $helper->url('user','profile') ?>&id=<?php echo $user->getId(); ?>" role="button">Volver</a>
        <?php } ?>
        <br>
      </div><!-- Jumbotron -->
    </div><!-- Container -->
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
    <script src="public/js/clickRow.js"></script>
  </body>
</html>
