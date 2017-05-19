<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <title>Géneros musicales</title>
  </head>
  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <h2>Géneros musicales</h2>
          <br>
          <?php foreach ($genres as $genre) { ?>
            <h4><?php echo $genre->getId(); ?></h4>
          <?php } ?>
        </div><!-- Jumbotron -->
    </div>
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
