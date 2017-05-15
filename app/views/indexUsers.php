<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Lista de Usuarios</title>
</head>
<body>
  <?php require_once('layout/headerLogged.php'); ?>
  <div class="container">
      <section>
          <!-- Jumbotron -->
          <div class="jumbotron">
              <h1>All Users</h1>
              <p><a class="btn btn-lg btn-success" href="#" role="button">Actualizar...</a></p>
          </div>

          <!-- Example row of columns -->
          <div class="row">
              <?php foreach ($users as $user) { ?>
                  <div class="col-lg-4">
                      <h2>Nombre: <?php echo $user->getId(); ?></h2>
                      <p class="text-danger">
                         Edad: <?php echo $user->getAge(); ?>
                      </p>
                      <p>
                          <a class="btn btn-primary" href="<?php echo $helper->url('user','show') ?>&id=<?php echo $user->getId(); ?>" role="button">Ver detalle &raquo;</a>
                      </p>
                  </div>
              <?php } ?>
          </div>
      </section>
  </div>
  <!-- Site footer -->
  <?php require_once('layout/footer.php'); ?>
</body>
</html>
