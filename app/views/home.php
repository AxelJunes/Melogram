<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <title>Home</title>
  </head>

  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <!-- Slider here -->
          <div class="row">
            <div class="col-lg-4">
              <img src="public/img/resources/info1.png" class="img-responsive img-info">
              <br>
              <p class="text-home">
                Melogram es una red social para "melómanos".
              </p>
              <br>
            </div>
            <div class="col-lg-4">
              <img src="public/img/resources/info2.png" class="img-responsive img-info">
              <br>
              <p class="text-home">
                Aquí podrás conocer a otros amantes de la música, y compartir tus gustos con ellos.
              </p>
              <br>
            </div>
            <div class="col-lg-4">
              <img src="public/img/resources/info3.png" class="img-responsive img-info">
              <br>
              <p class="text-home">
                También podrás pertenecer a grupos con gente a la que le guste la misma música que a ti.
              </p>
              <br>
            </div>
          </div>
        </div><!-- Jumbotron -->
    </div>
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
