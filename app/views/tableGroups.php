<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Grupos</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerAdmin.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Género</th>
              <th>Edad Mínima</th>
              <th>Edad Máxima</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($groups as $group) { ?>
            <tr>
              <td><?php echo $group->getId(); ?></td>
              <td><?php echo $group->getGenre(); ?></td>
              <td><?php echo $group->getMinAge(); ?></td>
              <td><?php echo $group->getMaxAge(); ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

        <br>
        <a class="btn btn-primary col-lg-2" href="<?php echo $helper->url('view','admin') ?>" role="button">Volver</a>
        <br>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
