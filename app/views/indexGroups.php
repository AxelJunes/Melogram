<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <title>Grupos</title>
  </head>
  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <h2>Grupos Registrados</h2>
          <br>
          <?php foreach ($groups as $group) { ?>
            <h3><u><?php echo $group->getId(); ?></u></h3>
            <h3>Género musical: <?php echo $group->getGenre(); ?></h3>
            <h3>Edad mínima: <?php echo $group->getMinAge(); ?></h3>
            <h3>Edad máxima: <?php echo $group->getMaxAge(); ?></h3>
            <br>
          <?php } ?>
        </div><!-- Jumbotron -->
    </div>
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
