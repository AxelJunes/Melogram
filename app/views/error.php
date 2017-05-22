<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <link rel="stylesheet" href="public/css/error.css">
    <title><?php echo $key; ?></title>
</head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <div class="container">
          <h1>Error <?php echo $key; ?></h1>
          <h1><?php echo $desc; ?></h1>
          <br><br>
          <a class="btn btn-lg btn-danger col-lg-2" href="index.php" role="button">Página de inicio</a>
          <br>
        </div>
      </div>
    </div>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
